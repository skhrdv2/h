<?php //ใช้งาน
include_once('../lib/config.inc.php');
$Db = new MySqlConn;
$table="hrd_position";//กำหนดตาราง
$data = array(
    "position_name"=>$_POST['position_name'],
    "position_location_code"=>$_POST['position_location_code'],
    "position_groups_id"=>$_POST['position_groups_id'],
    "position_fte"=>$_POST['fte'],
    "position_j18"=>$_POST['j18'],
);

if($_POST['req']=='req'){
$sql="SELECT 
hp.position_id,
hp.position_location_code,
hp.position_name,
hpg.position_groups_name,
hp.position_fte,
hp.position_j18,
hp.position_status
from hrd_position hp
LEFT OUTER JOIN hrd_position_groups hpg on hpg.position_groups_id=hp.position_groups_id
ORDER BY hp.position_id ASC
";

                $sql = $Db->query($sql,'');
               $data = array();
        foreach ($sql as $row ) {
            $data[] = $row ;
        }
                $response = array(
      
        "data" => $data
    );	
                echo json_encode($response);   
}else if($_POST['acc']=="save"){ //บันทึก
     $array2=array("position_status"=>'Y');
     $data = array_merge($data,$array2);
  
 $resualt=$Db->insert($table,$data);
 if($resualt=="success_insert"){
  $msg=array(
      "m"=>$resualt
  );
 }else{
    $msg=array(
      "m"=>$resualt
    ) ; 
 }
  echo json_encode($msg);
 
 }else if($_POST['acc']=="edit"){ //แก้ไข
    
  $Db->where('position_id',$_POST['position_id']);
 $resualt=$Db->update($table,$data);
 if($resualt=="success_update"){
  $msg=array(
      "m"=>$resualt
  );
 }else{
    $msg=array(
      "m"=>$resualt
    ) ; 
 }
  echo json_encode($msg);
 
 }elseif($_POST['acc']=="delete"){ //ลบ
     $Db->where('position_id',$_POST['sql']);
     $resualt=$Db->delete($table);
     if($resualt=="success_delete"){
        $msg=array(
            "m"=>$resualt
        );
       }else{
          $msg=array(
            "m"=>$resualt
          ) ; 
       }
        echo json_encode($msg);
    }elseif($_POST['acc']=="query_edit"){ //เรียกข้อมูลมาแก้ไข
  
     $Db->where('position_id',$_POST['sql']);
 $sql = $Db->query("",$table);
            $a_data=array();
          foreach ($sql as $row){
                 array_push($a_data,$row);	
                 
             }
 echo json_encode($row);
 }
  
            
 




if($_POST['acc']=="edit_status"){ //แก้ไข status
    if($_POST['state']=='true'){
        $status="Y";
    }else if($_POST['state']=="false"){
        $status="N";
    }
    $data_status = array( //กำหนดตัวแปรให้อยู่ในรูปแบบ array
       "position_status"=>$status
    );
    
    $Db->where('position_id',$_POST['position_id']);
   $resualt=$Db->update($table,$data_status);
   }
     ?>

