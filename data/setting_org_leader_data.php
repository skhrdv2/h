<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn; 
if($_POST['req']=='req'){
$sql="SELECT 
hol.hrd_leader_name,
DATE_FORMAT(DATE_ADD(hol.hrd_leader_startdate,INTERVAL 543 YEAR),'%d/%m/%Y') as hrd_leader_startdate,
DATE_FORMAT(DATE_ADD(hol.hrd_leader_enddate,INTERVAL 543 YEAR),'%d/%m/%Y') as hrd_leader_enddate,
hol.org_leader_position_name,
hol.org_leader_status
from hrd_org_leader hol
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
     "hrd_leader_name"=>$_POST['hrd_leader_name'], 
     "org_leader_position_name"=>$_POST['org_leader_position_name'],
     "org_leader_status"=>$_POST['deparorg_leader_statustment_status'], 
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

}    
 ?>

