<?php // ใช้งาน
include_once('../lib/config.inc.php');
$Db = new MySqlConn; 

if($_POST['req']=='req'){

$sql="SELECT ps.*,CONCAT(pn.prename_name,ps.fname,' ',ps.lname) AS fullname,YEAR( FROM_DAYS( DATEDIFF( NOW( ) ,birthday ) ) ) as agey,pst.position_name,dp.department_name,ds.department_sub_name,pn.prename_name,
if(DATE_FORMAT(ps.birthday,'%m')<10 , year(ADDDATE(ps.birthday,INTERVAL 60 YEAR))+543 , 
year(ADDDATE(ps.birthday,INTERVAL 60 YEAR))+544) as y_exp ,ps.startwork_date,hps.person_status_name,
CONCAT(TIMESTAMPDIFF(YEAR,ps.startwork_date,CURDATE())) AS age_work,hpg.position_groups_name
FROM hrd_person ps 
      LEFT OUTEr JOIN hrd_prename pn ON pn.prename_id = ps.prename_id  
      LEFT OUTER JOIN hrd_position pst ON pst.position_id = ps.position_id
      LEFT OUTER JOIN hrd_department dp ON dp.department_id = ps.department_id
      LEFT OUTER JOIN hrd_department_sub ds ON ds.department_sub_id = ps.department_sub_id
	  LEFT OUTER JOIN hrd_position hp ON ps.position_id = hp.position_id   
      LEFT OUTER JOIN hrd_position_groups hpg ON hp.position_groups_id = hpg.position_groups_id 
      LEFT OUTER JOIN hrd_person_status hps ON hps.person_status_id=ps.person_status_id
    WHERE person_id='".$_POST['person_id']."'  
      ";



//$sql.="AND ps.person_status_id=".$person_status;" ";

                $sql = $Db->query($sql,'');
                $a_data=array();
              foreach ($sql as $row){
                     array_push($a_data,$row);	
                     
                 }
     echo json_encode($row);
     }