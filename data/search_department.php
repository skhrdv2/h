<?php //ใช้งาน
include_once('../lib/config.inc.php');
$Db = new MySqlConn;

if($_GET['show_department']){  //แสดงจังหวัดทั้งหมดก่อน
$sql="SELECT * FROM hrd_department";
$result=$Db->query($sql);
   //วนลูปแสดงข้อมูลที่ได้ เก็บไว้ในตัวแปร $row
   foreach($result as $row) {       
    //เก็บข้อมูลที่ได้ไว้ในตัวแปร Array 
    $json_result[] = [
        'id'=>$row['department_id'],
		'name'=>$row['department_name'],
    ];
   
   }
   echo json_encode($json_result);
} 


if($_GET['show_department_sub']){
		$sql="SELECT * FROM hrd_department_sub where department_id='".$_GET['department_id']."'";
    //ประมวณผลคำสั่ง SQL
           //   $Db->where("department_id",$_POST['department_id']);
		$result = $Db->query($sql);
            foreach($result as $row) {
				
				//เก็บข้อมูลที่ได้ไว้ในตัวแปร Array 
				$json_result[] = [
					'id'=>$row['department_sub_id'],
					'name'=>$row['department_sub_name'],
				];
        } 
        echo json_encode($json_result);
  }

  if($_GET['show_depart_sub']){
		$sql="SELECT * FROM hrd_department_sub ";
    //ประมวณผลคำสั่ง SQL
           //   $Db->where("department_id",$_POST['department_id']);
		$result = $Db->query($sql);
            foreach($result as $row) {
				
				//เก็บข้อมูลที่ได้ไว้ในตัวแปร Array 
				$json_result[] = [
					'id'=>$row['department_sub_id'],
					'name'=>$row['department_sub_name'],
				];
        } 
        echo json_encode($json_result);
  }