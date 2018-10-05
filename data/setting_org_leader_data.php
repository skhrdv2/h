<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn; 
if($_POST['req']=='req'){
$sql="SELECT 
hol.hrd_leader_id,
concat(pn.prename_name,ps.fname,' ',ps.lname) AS fullname,
DATE_FORMAT(DATE_ADD(hol.hrd_leader_startdate,INTERVAL 543 YEAR),'%d/%m/%Y') as hrd_leader_startdate,
DATE_FORMAT(DATE_ADD(hol.hrd_leader_enddate,INTERVAL 543 YEAR),'%d/%m/%Y') as hrd_leader_enddate,
hol.org_leader_position_name,
hol.org_leader_status
from hrd_org_leader hol
inner join hrd_person ps ON ps.cid=hol.hrd_leader_cid
inner join hrd_prename pn ON pn.prename_id=ps.prename_id
ORDER BY hol.hrd_leader_startdate,hol.org_leader_status desc";

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
     "hrd_leader_cid"=>$_POST['hrd_leader_cid'],
     "org_leader_position_name"=>$_POST['leader_position_name'],
     "org_leader_status"=>$_POST['org_leader_status'], 
     "hrd_leader_startdate"=>$_POST['hrd_leader_startdate'],
   
 );
$resualt=$Db->insert('hrd_org_leader',$data);
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
     "hrd_leader_cid"=>$_POST['hrd_leader_cid'], 
     "org_leader_status"=>$_POST['org_leader_statustment_status'], 
     "hrd_leader_startdate"=>$_POST['hrd_leader_startdate'],
   
 );
 $Db->where('hrd_leader_id',$_POST['sql']);
$resualt=$Db->update('hrd_org_leader',$data);
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
    $Db->where('hrd_leader_id',$_POST['sql']);
    $resualt=$Db->delete('hrd_org_leader');
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
 
    $Db->where('hrd_leader_id',$_POST['sql']);
$sql = $Db->query("","hrd_org_leader");
           $a_data=array();
         foreach ($sql as $row){
                array_push($a_data,$row);	
                
            }
echo json_encode($row);
}
     
 ?>

