
<?PHP include_once '../lib/config.inc.php';
//ใช้งานอยู่
$Db = new MySqlConn; 
if($_POST['department_name']){//ชื่อกลุ่มงาน
  if($_POST['department_name']==$_POST['old_department_name']){
    echo 'true';
  }else{
    $num = $Db->num_rows("SELECT department_name FROM hrd_department WHERE department_name='".$_POST['department_name']." '");
    if ($num>0)  {
    
    echo 'false';
   // $json[] = ['text'=>'false'];
  } 
  else  {
    
     echo 'true';
    //$json[] = ['text'=>'true'];
  }

  }
    
 
}else if($_POST['department_sub_name']){ //ชื่อฝ่ายงาน
  if($_POST['department_sub_name']==$_POST['old_department_sub_name']){
    echo 'true';
  }else{
  $num = $Db->num_rows("SELECT department_sub_name FROM hrd_department_sub WHERE department_sub_name='".$_POST['department_sub_name']." '");
    if ($num>0)  {
    
    echo 'false';
  } 
  else  {
    
     echo 'true';
  }
}
}else if($_POST['cid']){
  if($_POST['cid']==$_POST['chk_cid']){
    echo 'true';
  }else{
  $num = $Db->num_rows("SELECT cid FROM hrd_person WHERE cid='".$_POST['cid']." '");
    if ($num>0)  {
    
    echo 'false';
  } 
  else  {
    
     echo 'true';
  }
}
}else if($_POST['position_name']){
  if($_POST['position_name']==$_POST['chk_position_name']){
    echo 'true';
  }else{
  $num = $Db->num_rows("SELECT position_name FROM hrd_position WHERE position_name='".$_POST['position_name']." '");
    if ($num>0)  {
    
    echo 'false';
  } 
  else  {
    
     echo 'true';
  }
}
}