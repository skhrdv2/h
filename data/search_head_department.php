<?php //ยังไม่ได้ใช้งาน
include_once('../lib/config.inc.php');
$Db = new MySqlConn;
$sql="SELECT ps.cid,CONCAT(pn.prename_name,ps.fname,'   ',ps.lname) AS fullname FROM hrd_person ps
left outer join hrd_prename pn ON pn.prename_id=ps.prename_id ";
$sql = $Db->query($sql,'');
$json = [];
foreach($sql as $row){
     $json[] = ['id'=>$row['cid'], 'text'=>$row['fullname']];
} 
echo json_encode($json);
?>