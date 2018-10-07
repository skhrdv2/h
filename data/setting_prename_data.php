<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn; 

$table="hrd_prename";//กำหนดตาราง
if($_POST['state']=='true'){
    $status="Y";
}else if($_POST['state']=="false"){
    $status="N";
}
$data = array( //กำหนดตัวแปรให้อยู่ในรูปแบบ array
   "prename_status"=>$status
);


if($_POST['req']=='req'){  //เรียกข้อมูล
$sql="SELECT 
hp.prename_id,
hp.prename_name,
hs.sex_name,
hp.prename_status,
hp.prename_lastupdate
from hrd_prename hp
LEFT OUTER JOIN hrd_sex hs on hs.sex_id=hp.sex_id";
                $sql = $Db->query($sql,'');
               $data = array();
        foreach ($sql as $row ) {
            $data[] = $row ;
        }
                $response = array(
        "data" => $data
    );	
    echo json_encode($response);   
}

if($_POST['acc']=="edit_status"){ //แก้ไข status

 $Db->where('prename_id',$_POST['prename_id']);
$resualt=$Db->update($table,$data);
}
     ?>

