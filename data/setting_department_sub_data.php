<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn; 
if($_POST['req']=='req'){
$sql="SELECT 
hds.department_sub_id,
hds.department_sub_name,
hd.department_name,
concat(hp.fname,'  ',hp.lname) as department_head,
hds.department_sub_tel,
hds.department_sub_status,
hds.last_update


from hrd_department_sub hds
LEFT OUTER JOIN hrd_person hp on hp.cid=hds.cid
LEFT OUTER JOIN hrd_department hd on hd.department_id=hds.department_id
ORDER BY hds.department_sub_id DESC

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
    $data = array(
     "department_sub_name"=>$_POST['department_sub_name'],
     "department_id"=>$_POST['department_id'], 
     "department_sub_status"=>$_POST['department_sub_status'], 
     "cid"=>$_POST['department_head_cid'],
     "department_head"=>$_POST['person_id_search'],
     "department_sub_tel"=>$_POST['department_sub_tel']
 );
$resualt=$Db->insert('hrd_department_sub',$data);
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
    $data = array(
        "department_sub_name"=>$_POST['department_sub_name'],
        "department_id"=>$_POST['department_id'], 
        "department_sub_status"=>$_POST['department_sub_status'], 
        "cid"=>$_POST['department_head_cid'],
        "department_head"=>$_POST['person_id_search'],
        "department_sub_tel"=>$_POST['department_sub_tel']
 );
 $Db->where('department_sub_id',$_POST['department_sub_id']);
$resualt=$Db->update('hrd_department_sub',$data);
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
    $Db->where('department_sub_id',$_POST['sql']);
    $resualt=$Db->delete('hrd_department_sub');
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
 
    $Db->where('department_sub_id',$_POST['sql']);
$sql = $Db->query("","hrd_department_sub");
           $a_data=array();
         foreach ($sql as $row){
                array_push($a_data,$row);	
                
            }
echo json_encode($row);
}
 

     ?>

