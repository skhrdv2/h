<?php
session_start();
if(isset($_SESSION['loginname']))
{
   
        echo "<script> window.location.replace('index.php') </script>" ;
}
include_once('lib/config.inc.php');
$Db = new MySqlConn;

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Login with Background Image - Robust - Responsive Bootstrap 4 Admin Dashboard Template for Web Application</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/login-register.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/sweetalert.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                  
                        <img src="app-assets/images/logo/hrd_logo.png" alt="branding logo">
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span><?php $result= $Db->query('SELECT * FROM hrd_gen_organization');
                                foreach($result AS $row){
                                    echo $row['org_name'];
                                } ?></span></h6>
                </div>
             <!--   <div class="card-content">
                    <div class="text-center">
                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span class="fa fa-github font-medium-4"></span></a>
                    </div>-->
                    <div class="card-body">
                        <form class="form-horizontal" action="" method="post" novalidate>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control" id="username" name="username" placeholder="ชื่อผู้ใช้งาน" required>
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน" required>
                                <div class="form-control-position">
                                    <i class="fa fa-key"></i>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-md-6 col-12 text-center text-sm-left">
                                  <!--  <fieldset>
                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                        <label for="remember-me"> Remember Me</label>
                                    </fieldset>-->
                                </div>
                                <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">ลืมรหัสผ่าน?</a></div>
                            </div>
                            <button type="submit" id="LoginBtn" name="LoginBtn" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> เข้าสู่ระบบ</button>
                        </form>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
<?php if(isset($_POST['LoginBtn'])){
    
    $num = $Db->num_rows("SELECT * FROM hrd_person WHERE username='".$_POST['username']."' AND password ='".md5($_POST['password'])." '");
    
        if ($num > 0) {
          
            $sql = $Db->query("
            SELECT *,concat('คุณ',h.fname,' ',h.lname) as fullname  FROM hrd_person h 
                LEFT OUTER JOIN hrd_prename p ON p.prename_id = h.prename_id
                LEFT OUTER JOIN hrd_department h2 on h2.department_id=h.department_id 
                WHERE h.person_status_id='1' and h.username='".$_POST['username']."' AND h.password ='".md5($_POST['password'])."' ");
            foreach ($sql AS $row) {
                $_SESSION['loginname'] = $row['username'];
                $_SESSION['person_id'] = $row['person_id'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['department_id'] = $row['department_id'];
                $_SESSION['department_sub_id'] = $row['department_sub_id'];
                $_SESSION['department_name'] = $row['department_name'];
                
                $str_time = date("H:i:s");
                $_SESSION['start_time'] = $str_time;
            }

             /*   $data = array(
                 'person_id'=>$row['person_id']
                   );
               $Db->insert('hrd_user_log',$data); */
        echo "<script language='javascript'>";
        echo "swal('success', 'เข้าสู่ระบบสำเร็จ', 'success');";
        echo "window.location.replace('index.php') </script>" ; 
        }
     else {
        echo "<script language='javascript'>";
        echo "swal('Error!', 'ชื่อหรือรหัสผ่านไม่ถูกต้อง!', 'error');";
        echo "</script>";
    } 
    
 } ?>