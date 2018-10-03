<?PHP include_once '../lib/config.inc.php';

$Db = new MySqlConn; 


if($_POST['department_name']){//ชื่อกลุ่มงาน
  if($_POST['department_name']==$_POST['old_department_name']){
    //echo 'true';
    $json[] = ['text'=>'true'];
  }else{
    $num = $Db->num_rows("SELECT department_name FROM hrd_department WHERE department_name='".$_POST['department_name']." '");
    if ($num>0)  {
    
    //echo 'false';
    $json[] = ['text'=>'false'];
  } 
  else  {
    
    // echo 'true';
    $json[] = ['text'=>'true'];
  }
  }
  echo json_encode($json);
}else if($_POST['department_sub_name']){ //ชื่อฝ่ายงาน
  $num = $Db->num_rows("SELECT department_sub_name FROM hrd_department_sub WHERE department_sub_name='".$_POST['department_sub_name']." '");
    if ($num>0)  {
    
    echo 'false';
  } 
  else  {
    
     echo 'true';
  }
}