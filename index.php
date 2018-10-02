<?php 
session_start();
if(!isset($_SESSION['loginname']))
{
 echo "<script> window.location.replace('login.php') </script>" ;
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
    <title></title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,400,500,700" rel="stylesheet">
    
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/weather-icons/climacons.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/calendars/clndr.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/meteocons/style.min.css">
    <link rel="stylesheet" type="text/css" href="includes/select2/css/select2.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="includes/sweet-alert/sweet-alert.css">
    <!-- END Custom CSS-->
    <script src="app-assets/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/libraries/bootstrap.min.js" type="text/javascript"></script>
    
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    
    <!-- BEGIN VENDOR JS-->
      <!-- BEGIN PAGE VENDOR JS-->
      <script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/buttons.flash.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/jszip.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/pdfmake.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/vfs_fonts.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/buttons.html5.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/buttons.print.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/repeater/jquery.repeater.min.js" type="text/javascript"></script>
    <script src="includes/select2/js/select2.full.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <script src="includes/sweet-alert/sweet-alert.js" type="text/javascript"></script>
    <script src="includes/validator/jquery.validate.min.js" type="text/javascript"></script>
    <script src="includes/fscript.js" type="text/javascript"></script>
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="robust admin logo" src="app-assets/images/logo/logo-light-sm.png">
                <h3 class="brand-text">Robust Admin</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
                
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a>
            </li>
             
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="dropdown dropdown-language nav-item">
                  <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-linode teal"></i><span>โมดูล</span>
                  <span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                    <a class="dropdown-item" href="?page=person_list"><i class="fa fa-users"></i> จัดการบุคลากร</a>
                   
                </div>
              </li>
              <li class="dropdown dropdown-language nav-item">
                  <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs teal"></i><span>ตั้งค่าข้อมูลพื้นฐาน</span><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                <a class="dropdown-item" href="?page=setting_department"><i class="fa fa-th-large"></i> ตั้งค่ากลุ่มงาน</a>
                <a class="dropdown-item" href="?page=setting_department_sub"><i class="fa fa-th-list"></i> ตั้งค่าฝ่าย/งาน</a>
                <a class="dropdown-item" href="?page=setting_department_sub"><i class="fa fa-black-tie"></i> ผู้บริหาร</a>
               
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         
            <!--  <li class="dropdown dropdown-language nav-item">
                  <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span>English</span><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
              </li>
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                  </li>
                  <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">You have new order!</h6>
                          <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading red darken-1">99% Server load</h6>
                          <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                          <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Complete the task</h6><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Generate monthly report</h6><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i><span class="badge badge-pill badge-default badge-info badge-default badge-up">5              </span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                  </li>
                  <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Margaret Govan</h6>
                          <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Bret Lezama</h6>
                          <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Carie Berra</h6>
                          <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Eric Alsobrook</h6>
                          <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                </ul>
              </li>-->
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name"><?=$_SESSION['fname'];?></span></a>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="index.html"><i class="icon-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">5</span></a>
            <ul class="menu-content">
              <li class="active"><a class="menu-item" href="dashboard-ecommerce.html" data-i18n="nav.dash.ecommerce">eCommerce</a>
              </li>
              <li><a class="menu-item" href="dashboard-project.html" data-i18n="nav.dash.project">Project</a>
              </li>
              <li><a class="menu-item" href="dashboard-analytics.html" data-i18n="nav.dash.analytics">Analytics</a>
              </li>
              <li><a class="menu-item" href="dashboard-crm.html" data-i18n="nav.dash.crm">CRM</a>
              </li>
              <li><a class="menu-item" href="dashboard-fitness.html" data-i18n="nav.dash.fitness">Fitness</a>
              </li>
            </ul>
          </li>
         <li class=" nav-item"><a href="#"><i class="icon-screen-tablet"></i><span class="menu-title" data-i18n="nav.templates.main">Templates</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main">Vertical</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../vertical-menu-template" data-i18n="nav.templates.vert.classic_menu">Classic Menu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-compact-menu-template" data-i18n="nav.templates.vert.compact_menu">Compact Menu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-content-menu-template" data-i18n="nav.templates.vert.content_menu">Content Menu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-overlay-menu-template" data-i18n="nav.templates.vert.overlay_menu">Overlay Menu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-multi-level-menu-template" data-i18n="nav.templates.vert.multi_level_menu">Multi-level Menu</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main">Horizontal</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../horizontal-menu-template" data-i18n="nav.templates.horz.classic">Classic</a>
                  </li>
                  <li><a class="menu-item" href="../horizontal-top-icon-menu-template" data-i18n="nav.templates.horz.top_icon">Top Icon</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.layouts">Layouts</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Page layouts</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1 column</a>
              </li>
              <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2 columns</a>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns.main">Content Sidebar</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="layout-content-left-sidebar.html" data-i18n="nav.page_layouts.3_columns.left_sidebar">Left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-left-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Left sticky sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-right-sidebar.html" data-i18n="nav.page_layouts.3_columns.right_sidebar">Right sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-right-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns.right_sticky_sidebar">Right sticky sidebar</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns_detached.main">Content Det. Sidebar</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="layout-content-detached-left-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_left_sidebar">Detached left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-detached-left-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar">Detached sticky left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-detached-right-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_right_sidebar">Detached right sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-detached-right-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_right_sidebar">Detached sticky right sidebar</a>
                  </li>
                </ul>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="layout-fixed-navbar.html" data-i18n="nav.page_layouts.fixed_navbar">Fixed navbar</a>
              </li>
              <li><a class="menu-item" href="layout-fixed-navigation.html" data-i18n="nav.page_layouts.fixed_navigation">Fixed navigation</a>
              </li>
              <li><a class="menu-item" href="layout-fixed-navbar-navigation.html" data-i18n="nav.page_layouts.fixed_navbar_navigation">Fixed navbar &amp; navigation</a>
              </li>
              <li><a class="menu-item" href="layout-fixed-navbar-footer.html" data-i18n="nav.page_layouts.fixed_navbar_footer">Fixed navbar &amp; footer</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="layout-fixed.html" data-i18n="nav.page_layouts.fixed_layout">Fixed layout</a>
              </li>
              <li><a class="menu-item" href="layout-boxed.html" data-i18n="nav.page_layouts.boxed_layout">Boxed layout</a>
              </li>
              <li><a class="menu-item" href="layout-static.html" data-i18n="nav.page_layouts.static_layout">Static layout</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="layout-light.html" data-i18n="nav.page_layouts.light_layout">Light layout</a>
              </li>
              <li><a class="menu-item" href="layout-dark.html" data-i18n="nav.page_layouts.dark_layout">Dark layout</a>
              </li>
              <li><a class="menu-item" href="layout-semi-dark.html" data-i18n="nav.page_layouts.semi_dark_layout">Semi dark layout</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-list"></i><span class="menu-title" data-i18n="nav.navbars.main">Navbars</span><span class="badge badge badge-success float-right mr-2">New</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="navbar-light.html" data-i18n="nav.navbars.nav_light">Navbar Light</a>
              </li>
              <li><a class="menu-item" href="navbar-dark.html" data-i18n="nav.navbars.nav_dark">Navbar Dark</a>
              </li>
              <li><a class="menu-item" href="navbar-semi-dark.html" data-i18n="nav.navbars.nav_semi">Navbar Semi Dark</a>
              </li>
              <li><a class="menu-item" href="navbar-brand-center.html" data-i18n="nav.navbars.nav_brand_center">Brand Center</a>
              </li>
              <li><a class="menu-item" href="navbar-fixed-top.html" data-i18n="nav.navbars.nav_fixed_top">Fixed Top</a>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.navbars.nav_hide_on_scroll.main">Hide on Scroll</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="navbar-hide-on-scroll-top.html" data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_top">Hide on Scroll Top</a>
                  </li>
                  <li><a class="menu-item" href="navbar-hide-on-scroll-bottom.html" data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_bottom">Hide on Scroll Bottom</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Navbar Components</a>
              </li>
              <li><a class="menu-item" href="navbar-styling.html" data-i18n="nav.navbars.nav_styling">Navbar Styling</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-share"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Vertical Nav</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#" data-i18n="nav.vertical_nav.vertical_navigation_types.main">Navigation Types</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../vertical-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_menu">Vertical Menu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-multi-level-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_mmenu">Vertical MMenu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-overlay-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_overlay">Vertical Overlay</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-compact-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_compact">Vertical Compact</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-content-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_content">Vertical Content</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="vertical-nav-fixed.html" data-i18n="nav.vertical_nav.vertical_nav_fixed">Fixed Navigation</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-static.html" data-i18n="nav.vertical_nav.vertical_nav_static">Static Navigation</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-light.html" data-i18n="nav.vertical_nav.vertical_nav_light">Navigation Light</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-dark.html" data-i18n="nav.vertical_nav.vertical_nav_dark">Navigation Dark</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-accordion.html" data-i18n="nav.vertical_nav.vertical_nav_accordion">Accordion Navigation</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-collapsible.html" data-i18n="nav.vertical_nav.vertical_nav_collapsible">Collapsible Navigation</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-flipped.html" data-i18n="nav.vertical_nav.vertical_nav_flipped">Flipped Navigation</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-native-scroll.html" data-i18n="nav.vertical_nav.vertical_nav_native_scroll">Native scroll</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-right-side-icon.html" data-i18n="nav.vertical_nav.vertical_nav_right_side_icon">Right side icons</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-bordered.html" data-i18n="nav.vertical_nav.vertical_nav_bordered">Bordered Navigation</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-disabled-link.html" data-i18n="nav.vertical_nav.vertical_nav_disabled_link">Disabled Navigation</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-styling.html" data-i18n="nav.vertical_nav.vertical_nav_styling">Navigation Styling</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-tags-pills.html" data-i18n="nav.vertical_nav.vertical_nav_tags_pills">Tags &amp; Pills</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-equalizer"></i><span class="menu-title" data-i18n="nav.horz_nav.main">Horizontal Nav</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#" data-i18n="nav.horz_nav.horizontal_navigation_types.main">Navigation Types</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../horizontal-menu-template" data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_left_icon_navigation">Left Icon Navigation</a>
                  </li>
                  <li><a class="menu-item" href="../horizontal-top-icon-menu-template" data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_top_icon_navigation">Top Icon Navigation</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-direction"></i><span class="menu-title" data-i18n="nav.page_headers.main">Page Headers</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="headers-breadcrumbs-basic.html" data-i18n="nav.page_headers.headers_breadcrumbs_basic">Breadcrumbs basic</a>
              </li>
              <li><a class="menu-item" href="headers-breadcrumbs-top.html" data-i18n="nav.page_headers.headers_breadcrumbs_top">Breadcrumbs top</a>
              </li>
              <li><a class="menu-item" href="headers-breadcrumbs-bottom.html" data-i18n="nav.page_headers.headers_breadcrumbs_bottom">Breadcrumbs bottom</a>
              </li>
              <li><a class="menu-item" href="headers-breadcrumbs-top-with-description.html" data-i18n="nav.page_headers.headers_breadcrumbs_top_with_description">Breadcrumbs top with desc</a>
              </li>
              <li><a class="menu-item" href="headers-breadcrumbs-with-button.html" data-i18n="nav.page_headers.headers_breadcrumbs_with_button">Breadcrumbs with button</a>
              </li>
              <li><a class="menu-item" href="headers-breadcrumbs-with-round-button.html" data-i18n="nav.page_headers.headers_breadcrumbs_with_round_button">Breadcrumbs with button 2</a>
              </li>
              <li><a class="menu-item" href="headers-breadcrumbs-with-button-group.html" data-i18n="nav.page_headers.headers_breadcrumbs_with_button_group">Breadcrumbs with buttons</a>
              </li>
              <li><a class="menu-item" href="headers-breadcrumbs-with-description.html" data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_description">Breadcrumbs with desc</a>
              </li>
              <li><a class="menu-item" href="headers-breadcrumbs-with-search.html" data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_search">Breadcrumbs with search</a>
              </li>
              <li><a class="menu-item" href="headers-breadcrumbs-with-stats.html" data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_stats">Breadcrumbs with stats</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-social-facebook"></i><span class="menu-title" data-i18n="nav.footers.main">Footers</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="footer-light.html" data-i18n="nav.footers.footer_light">Footer Light</a>
              </li>
              <li><a class="menu-item" href="footer-dark.html" data-i18n="nav.footers.footer_dark">Footer Dark</a>
              </li>
              <li><a class="menu-item" href="footer-transparent.html" data-i18n="nav.footers.footer_transparent">Footer Transparent</a>
              </li>
              <li><a class="menu-item" href="footer-fixed.html" data-i18n="nav.footers.footer_fixed">Footer Fixed</a>
              </li>
              <li><a class="menu-item" href="footer-components.html" data-i18n="nav.footers.footer_components">Footer Components</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.general">General</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-pencil"></i><span class="menu-title" data-i18n="nav.color_palette.main">Color Palette</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="color-palette-primary.html" data-i18n="nav.color_palette.color_palette_primary">Primary palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-danger.html" data-i18n="nav.color_palette.color_palette_danger">Danger palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-success.html" data-i18n="nav.color_palette.color_palette_success">Success palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-warning.html" data-i18n="nav.color_palette.color_palette_warning">Warning palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-info.html" data-i18n="nav.color_palette.color_palette_info">Info palette</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="color-palette-red.html" data-i18n="nav.color_palette.color_palette_red">Red palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-pink.html" data-i18n="nav.color_palette.color_palette_pink">Pink palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-purple.html" data-i18n="nav.color_palette.color_palette_purple">Purple palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-deep-purple.html" data-i18n="nav.color_palette.color_palette_deep_purple">Deep Purple palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-indigo.html" data-i18n="nav.color_palette.color_palette_indigo">Indigo palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-blue.html" data-i18n="nav.color_palette.color_palette_blue">Blue palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-light-blue.html" data-i18n="nav.color_palette.color_palette_light_blue">Light Blue palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-cyan.html" data-i18n="nav.color_palette.color_palette_cyan">Cyan palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-teal.html" data-i18n="nav.color_palette.color_palette_teal">Teal palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-green.html" data-i18n="nav.color_palette.color_palette_green">Green palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-light-green.html" data-i18n="nav.color_palette.color_palette_light_green">Light Green palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-lime.html" data-i18n="nav.color_palette.color_palette_lime">Lime palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-yellow.html" data-i18n="nav.color_palette.color_palette_yellow">Yellow palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-amber.html" data-i18n="nav.color_palette.color_palette_amber">Amber palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-orange.html" data-i18n="nav.color_palette.color_palette_orange">Orange palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-deep-orange.html" data-i18n="nav.color_palette.color_palette_deep_orange">Deep Orange palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-brown.html" data-i18n="nav.color_palette.color_palette_brown">Brown palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-blue-grey.html" data-i18n="nav.color_palette.color_palette_blue_grey">Blue Grey palette</a>
              </li>
              <li><a class="menu-item" href="color-palette-grey.html" data-i18n="nav.color_palette.color_palette_grey">Grey palette</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-bulb"></i><span class="menu-title" data-i18n="nav.starter_kit.main">Starter kit</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-1-column.html" data-i18n="nav.starter_kit.1_column">1 column</a>
              </li>
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-2-columns.html" data-i18n="nav.starter_kit.2_columns">2 columns</a>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.starter_kit.3_columns.main">Content Sidebar</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-content-left-sidebar.html" data-i18n="nav.starter_kit.3_columns.3_columns_left_sidebar">Left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-content-left-sticky-sidebar.html" data-i18n="nav.starter_kit.3_columns.3_columns_left_sticky_sidebar">Left sticky sidebar</a>
                  </li>
                  <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-content-right-sidebar.html" data-i18n="nav.starter_kit.3_columns.3_columns_right_sidebar">Right sidebar</a>
                  </li>
                  <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-content-right-sticky-sidebar.html" data-i18n="nav.starter_kit.3_columns.3_columns_right_sticky_sidebar">Right sticky sidebar</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.starter_kit.3_columns_detached.main">Content Det. Sidebar</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-content-detached-left-sidebar.html" data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_left_sidebar">Detached left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-content-detached-left-sticky-sidebar.html" data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_sticky_left_sidebar">Detached sticky left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-content-detached-right-sidebar.html" data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_right_sidebar">Detached right sidebar</a>
                  </li>
                  <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-content-detached-right-sticky-sidebar.html" data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_sticky_right_sidebar">Detached sticky right sidebar</a>
                  </li>
                </ul>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-fixed-navbar.html" data-i18n="nav.starter_kit.fixed_navbar">Fixed navbar</a>
              </li>
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-fixed-navigation.html" data-i18n="nav.starter_kit.fixed_navigation">Fixed navigation</a>
              </li>
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-fixed-navbar-navigation.html" data-i18n="nav.starter_kit.fixed_navbar_navigation">Fixed navbar &amp; navigation</a>
              </li>
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-fixed-navbar-footer.html" data-i18n="nav.starter_kit.fixed_navbar_footer">Fixed navbar &amp; footer</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-fixed.html" data-i18n="nav.starter_kit.fixed_layout">Fixed layout</a>
              </li>
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-boxed.html" data-i18n="nav.starter_kit.boxed_layout">Boxed layout</a>
              </li>
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-static.html" data-i18n="nav.starter_kit.static_layout">Static layout</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-light.html" data-i18n="nav.starter_kit.light_layout">Light layout</a>
              </li>
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-dark.html" data-i18n="nav.starter_kit.dark_layout">Dark layout</a>
              </li>
              <li><a class="menu-item" href="../../../starter-kit/ltr/vertical-menu-template/layout-semi-dark.html" data-i18n="nav.starter_kit.semi_dark_layout">Semi dark layout</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="changelog.html"><i class="icon-docs"></i><span class="menu-title" data-i18n="nav.changelog.main">Changelog</span><span class="badge badge badge-pill badge-danger float-right mr-2">2.0</span></a>
          </li>
          <li class="disabled nav-item"><a href="#"><i class="icon-ban"></i><span class="menu-title" data-i18n="nav.disabled_menu.main">Disabled Menu</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-options-vertical"></i><span class="menu-title" data-i18n="nav.menu_levels.main">Menu levels</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level">Second level</a>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.main">Second level child</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.third_level">Third level</a>
                  </li>
                  <li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.main">Third level child</a>
                    <ul class="menu-content">
                      <li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level1">Fourth level</a>
                      </li>
                      <li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level2">Fourth level</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.pages">Pages</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Pages"></i>
          </li>
          <li class=" nav-item"><a href="email-application.html"><i class="icon-envelope"></i><span class="menu-title" data-i18n="nav.email-application.main">Email Application</span></a>
          </li>
          <li class=" nav-item"><a href="chat-application.html"><i class="icon-bubbles"></i><span class="menu-title" data-i18n="nav.chat-application.main">Chat Application</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-briefcase"></i><span class="menu-title" data-i18n="nav.project.main">Project</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="project-summary.html" data-i18n="nav.project.project_summary">Project Summary</a>
              </li>
              <li><a class="menu-item" href="project-tasks.html" data-i18n="nav.project.project_tasks">Project Task</a>
              </li>
              <li><a class="menu-item" href="project-bugs.html" data-i18n="nav.project.project_bugs">Project Bugs</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="scrumboard.html"><i class="icon-check"></i><span class="menu-title" data-i18n="nav.scrumboard.main">Scrumboard</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-doc"></i><span class="menu-title" data-i18n="nav.invoice.main">Invoice</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="invoice-summary.html" data-i18n="nav.invoice.invoice_summary">Invoice Summary</a>
              </li>
              <li><a class="menu-item" href="invoice-template.html" data-i18n="nav.invoice.invoice_template">Invoice Template</a>
              </li>
              <li><a class="menu-item" href="invoice-list.html" data-i18n="nav.invoice.invoice_list">Invoice List</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="page-checkout.html"><i class="icon-basket-loaded"></i><span class="menu-title" data-i18n="nav.page-checkout">Checkout page</span></a>
          </li>
          <li class=" nav-item"><a href="page-pricing.html"><i class="icon-notebook"></i><span class="menu-title" data-i18n="nav.page-pricing">Pricing page</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-film"></i><span class="menu-title" data-i18n="nav.timelines.main">Timelines</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="timeline-center.html" data-i18n="nav.timelines.timeline_center">Timelines Center</a>
              </li>
              <li><a class="menu-item" href="timeline-left.html" data-i18n="nav.timelines.timeline_left">Timelines Left</a>
              </li>
              <li><a class="menu-item" href="timeline-right.html" data-i18n="nav.timelines.timeline_right">Timelines Right</a>
              </li>
              <li><a class="menu-item" href="timeline-horizontal.html" data-i18n="nav.timelines.timeline_horizontal">Timelines Horizontal</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-user"></i><span class="menu-title" data-i18n="nav.users.main">Users</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="user-profile.html" data-i18n="nav.users.user_profile">Users Profile</a>
              </li>
              <li><a class="menu-item" href="user-cards.html" data-i18n="nav.users.user_cards">Users Cards</a>
              </li>
              <li><a class="menu-item" href="users-contacts.html" data-i18n="nav.users.users_contacts">Users List</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-picture"></i><span class="menu-title" data-i18n="nav.gallery_pages.main">Gallery</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="gallery-grid.html" data-i18n="nav.gallery_pages.gallery_grid">Gallery Grid</a>
              </li>
              <li><a class="menu-item" href="gallery-grid-with-desc.html" data-i18n="nav.gallery_pages.gallery_grid_with_desc">Gallery Grid with Desc</a>
              </li>
              <li><a class="menu-item" href="gallery-masonry.html" data-i18n="nav.gallery_pages.gallery_masonry">Masonry Gallery</a>
              </li>
              <li><a class="menu-item" href="gallery-masonry-with-desc.html" data-i18n="nav.gallery_pages.gallery_masonry_with_desc">Masonry Gallery with Desc</a>
              </li>
              <li><a class="menu-item" href="gallery-hover-effects.html" data-i18n="nav.gallery_pages.gallery_hover_effects">Hover Effects</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-magnifier"></i><span class="menu-title" data-i18n="nav.search_pages.main">Search</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="search-page.html" data-i18n="nav.search_pages.search_page">Search Page</a>
              </li>
              <li><a class="menu-item" href="search-website.html" data-i18n="nav.search_pages.search_website">Search Website</a>
              </li>
              <li><a class="menu-item" href="search-images.html" data-i18n="nav.search_pages.search_images">Search Images</a>
              </li>
              <li><a class="menu-item" href="search-videos.html" data-i18n="nav.search_pages.search_videos">Search Videos</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-lock-open"></i><span class="menu-title" data-i18n="nav.login_register_pages.main">Authentication</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="login-simple.html" data-i18n="nav.login_register_pages.login_simple">Login Simple</a>
              </li>
              <li><a class="menu-item" href="login-with-bg.html" data-i18n="nav.login_register_pages.login_with_bg">Login with Bg</a>
              </li>
              <li><a class="menu-item" href="login-with-bg-image.html" data-i18n="nav.login_register_pages.login_with_bg_image">Login with Bg Image</a>
              </li>
              <li><a class="menu-item" href="login-with-navbar.html" data-i18n="nav.login_register_pages.login_with_navbar">Login with Navbar</a>
              </li>
              <li><a class="menu-item" href="login-advanced.html" data-i18n="nav.login_register_pages.login_advanced">Login Advanced</a>
              </li>
              <li><a class="menu-item" href="register-simple.html" data-i18n="nav.login_register_pages.register_simple">Register Simple</a>
              </li>
              <li><a class="menu-item" href="register-with-bg.html" data-i18n="nav.login_register_pages.register_with_bg">Register with Bg</a>
              </li>
              <li><a class="menu-item" href="register-with-bg-image.html" data-i18n="nav.login_register_pages.register_with_bg_image">Register with Bg Image</a>
              </li>
              <li><a class="menu-item" href="register-with-navbar.html" data-i18n="nav.login_register_pages.register_with_navbar">Register with Navbar</a>
              </li>
              <li><a class="menu-item" href="register-advanced.html" data-i18n="nav.login_register_pages.register_advanced">Register Advanced</a>
              </li>
              <li><a class="menu-item" href="unlock-user.html" data-i18n="nav.login_register_pages.unlock_user">Unlock User</a>
              </li>
              <li><a class="menu-item" href="recover-password.html" data-i18n="nav.login_register_pages.recover_password">Recover Password</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-question"></i><span class="menu-title" data-i18n="nav.error_pages.main">Error</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="error-400.html" data-i18n="nav.error_pages.error_400">Error 400</a>
              </li>
              <li><a class="menu-item" href="error-400-with-navbar.html" data-i18n="nav.error_pages.error_400_with_navbar">Error 400 with Navbar</a>
              </li>
              <li><a class="menu-item" href="error-401.html" data-i18n="nav.error_pages.error_401">Error 401</a>
              </li>
              <li><a class="menu-item" href="error-401-with-navbar.html" data-i18n="nav.error_pages.error_401_with_navbar">Error 401 with Navbar</a>
              </li>
              <li><a class="menu-item" href="error-403.html" data-i18n="nav.error_pages.error_403">Error 403</a>
              </li>
              <li><a class="menu-item" href="error-403-with-navbar.html" data-i18n="nav.error_pages.error_403_with_navbar">Error 403 with Navbar</a>
              </li>
              <li><a class="menu-item" href="error-404.html" data-i18n="nav.error_pages.error_404">Error 404</a>
              </li>
              <li><a class="menu-item" href="error-404-with-navbar.html" data-i18n="nav.error_pages.error_404_with_navbar">Error 404 with Navbar</a>
              </li>
              <li><a class="menu-item" href="error-500.html" data-i18n="nav.error_pages.error_500">Error 500</a>
              </li>
              <li><a class="menu-item" href="error-500-with-navbar.html" data-i18n="nav.error_pages.error_500_with_navbar">Error 500 with Navbar</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-paper-clip"></i><span class="menu-title" data-i18n="nav.other_pages.main">Others</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#" data-i18n="nav.other_pages.coming_soon.main">Coming Soon</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="coming-soon-flat.html" data-i18n="nav.other_pages.coming_soon.coming_soon_flat">Flat</a>
                  </li>
                  <li><a class="menu-item" href="coming-soon-bg-image.html" data-i18n="nav.other_pages.coming_soon.coming_soon_bg_image">Bg image</a>
                  </li>
                  <li><a class="menu-item" href="coming-soon-bg-video.html" data-i18n="nav.other_pages.coming_soon.coming_soon_bg_video">Bg video</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="under-maintenance.html" data-i18n="nav.other_pages.under_maintenance">Maintenance</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.ui">User Interface</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="User Interface"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-folder"></i><span class="menu-title" data-i18n="nav.cards.main">Cards</span><span class="badge badge badge-info float-right mr-2">Updated</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="card-bootstrap.html" data-i18n="nav.cards.card_bootstrap">Bootstrap</a>
              </li>
              <li><a class="menu-item" href="card-headings.html" data-i18n="nav.cards.card_headings">Headings</a>
              </li>
              <li><a class="menu-item" href="card-options.html" data-i18n="nav.cards.card_options">Options</a>
              </li>
              <li><a class="menu-item" href="card-actions.html" data-i18n="nav.cards.card_actions">Action</a>
              </li>
              <li><a class="menu-item" href="card-draggable.html" data-i18n="nav.cards.card_draggable">Draggable</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-heart"></i><span class="menu-title" data-i18n="nav.advance_cards.main">Advance Cards</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="card-statistics.html" data-i18n="nav.cards.card_statistics">Statistics</a>
              </li>
              <li><a class="menu-item" href="card-weather.html" data-i18n="nav.cards.card_weather">Weather</a>
              </li>
              <li><a class="menu-item" href="card-charts.html" data-i18n="nav.cards.card_charts">Charts</a>
              </li>
              <li><a class="menu-item" href="card-interactive.html" data-i18n="nav.cards.card_interactive">Interactive</a>
              </li>
              <li><a class="menu-item" href="card-maps.html" data-i18n="nav.cards.card_maps">Maps</a>
              </li>
              <li><a class="menu-item" href="card-social.html" data-i18n="nav.cards.card_social">Social</a>
              </li>
              <li><a class="menu-item" href="card-ecommerce.html" data-i18n="nav.cards.card_ecommerce">E-Commerce</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-speedometer"></i><span class="menu-title" data-i18n="nav.content.main">Content</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="content-grid.html" data-i18n="nav.content.content_grid">Grid</a>
              </li>
              <li><a class="menu-item" href="content-typography.html" data-i18n="nav.content.content_typography">Typography</a>
              </li>
              <li><a class="menu-item" href="content-text-utilities.html" data-i18n="nav.content.content_text_utilities">Text utilities</a>
              </li>
              <li><a class="menu-item" href="content-syntax-highlighter.html" data-i18n="nav.content.content_syntax_highlighter">Syntax highlighter</a>
              </li>
              <li><a class="menu-item" href="content-helper-classes.html" data-i18n="nav.content.content_helper_classes">Helper classes</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-drawer"></i><span class="menu-title" data-i18n="nav.components.main">Components</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="component-alerts.html" data-i18n="nav.components.component_alerts">Alerts</a>
              </li>
              <li><a class="menu-item" href="component-callout.html" data-i18n="nav.components.component_callout">Callout</a>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.components.components_buttons.main">Buttons</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="component-buttons-basic.html" data-i18n="nav.components.components_buttons.component_buttons_basic">Basic Buttons</a>
                  </li>
                  <li><a class="menu-item" href="component-buttons-extended.html" data-i18n="nav.components.components_buttons.component_buttons_extended">Extended Buttons</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="component-carousel.html" data-i18n="nav.components.component_carousel">Carousel</a>
              </li>
              <li><a class="menu-item" href="component-collapse.html" data-i18n="nav.components.component_collapse">Collapse</a>
              </li>
              <li><a class="menu-item" href="component-dropdowns.html" data-i18n="nav.components.component_dropdowns">Dropdowns</a>
              </li>
              <li><a class="menu-item" href="component-list-group.html" data-i18n="nav.components.component_list_group">List Group</a>
              </li>
              <li><a class="menu-item" href="component-modals.html" data-i18n="nav.components.component_modals">Modals</a>
              </li>
              <li><a class="menu-item" href="component-pagination.html" data-i18n="nav.components.component_pagination">Pagination</a>
              </li>
              <li><a class="menu-item" href="component-navs-component.html" data-i18n="nav.components.component_navs_component">Navs Component</a>
              </li>
              <li><a class="menu-item" href="component-tabs-component.html" data-i18n="nav.components.component_tabs_component">Tabs Component</a>
              </li>
              <li><a class="menu-item" href="component-pills-component.html" data-i18n="nav.components.component_pills_component">Pills Component</a>
              </li>
              <li><a class="menu-item" href="component-tooltips.html" data-i18n="nav.components.component_tooltips">Tooltips</a>
              </li>
              <li><a class="menu-item" href="component-popovers.html" data-i18n="nav.components.component_popovers">Popovers</a>
              </li>
              <li><a class="menu-item" href="component-badges.html" data-i18n="nav.components.component_badges">Badges</a>
              </li>
              <li><a class="menu-item" href="component-pill-badges.html">Pill Badges</a>
              </li>
              <li><a class="menu-item" href="component-progress.html" data-i18n="nav.components.component_progress">Progress</a>
              </li>
              <li><a class="menu-item" href="component-media-objects.html" data-i18n="nav.components.component_media_objects">Media Objects</a>
              </li>
              <li><a class="menu-item" href="component-scrollable.html" data-i18n="nav.components.component_scrollable">Scrollable</a>
              </li>
              <li><a class="menu-item" href="component-loaders.html" data-i18n="nav.components.component_loaders">Loaders</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-diamond"></i><span class="menu-title" data-i18n="nav.extra_components.main">Extra Components</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="ex-component-sweet-alerts.html" data-i18n="nav.extra_components.ex_component_sweet_alerts">Sweet Alerts</a>
              </li>
              <li><a class="menu-item" href="ex-component-tree-views.html" data-i18n="nav.extra_components.ex_component_tree_views">Tree Views</a>
              </li>
              <li><a class="menu-item" href="ex-component-toastr.html" data-i18n="nav.extra_components.ex_component_toastr">Toastr</a>
              </li>
              <li><a class="menu-item" href="ex-component-ratings.html" data-i18n="nav.extra_components.ex_component_ratings">Ratings</a>
              </li>
              <li><a class="menu-item" href="ex-component-context-menu.html" data-i18n="nav.extra_components.ex_component_context_menu">Context Menu</a>
              </li>
              <li><a class="menu-item" href="ex-component-noui-slider.html" data-i18n="nav.extra_components.ex_component_noui_slider">NoUI Slider</a>
              </li>
              <li><a class="menu-item" href="ex-component-date-time-dropper.html" data-i18n="nav.extra_components.ex_component_date_time_dropper">Date Time Dropper</a>
              </li>
              <li><a class="menu-item" href="ex-component-lists.html" data-i18n="nav.extra_components.ex_component_lists">Lists</a>
              </li>
              <li><a class="menu-item" href="ex-component-toolbar.html" data-i18n="nav.extra_components.ex_component_toolbar">Toolbar</a>
              </li>
              <li><a class="menu-item" href="ex-component-unslider.html" data-i18n="nav.extra_components.ex_component_unslider">Unslider</a>
              </li>
              <li><a class="menu-item" href="ex-component-knob.html" data-i18n="nav.extra_components.ex_component_knob">Knob</a>
              </li>
              <li><a class="menu-item" href="ex-component-long-press.html" data-i18n="nav.extra_components.ex_component_long_press">Long Press</a>
              </li>
              <li><a class="menu-item" href="ex-component-offline.html" data-i18n="nav.extra_components.ex_component_offline">Offline</a>
              </li>
              <li><a class="menu-item" href="ex-component-zoom.html" data-i18n="nav.extra_components.ex_component_zoom">Zoom</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-target"></i><span class="menu-title" data-i18n="nav.icons.main">Icons</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="icons-feather.html" data-i18n="nav.icons.icons_feather">Feather</a>
              </li>
              <li><a class="menu-item" href="icons-font-awesome.html" data-i18n="nav.icons.icons_font_awesome">Font Awesome</a>
              </li>
              <li><a class="menu-item" href="icons-meteocons.html" data-i18n="nav.icons.icons_meteocons">Meteocons</a>
              </li>
              <li><a class="menu-item" href="icons-simple-line-icons.html" data-i18n="nav.icons.icons_simple_line_icons">Simple Line Icons</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="animation.html"><i class="icon-refresh spinner"></i><span class="menu-title" data-i18n="nav.animation.main">Animation</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.forms">Forms</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Forms"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-screen-desktop"></i><span class="menu-title" data-i18n="nav.form_elements.main">Form Elements</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="form-inputs.html" data-i18n="nav.form_elements.form_inputs">Form Inputs</a>
              </li>
              <li><a class="menu-item" href="form-input-groups.html" data-i18n="nav.form_elements.form_input_groups">Input Groups</a>
              </li>
              <li><a class="menu-item" href="form-input-grid.html" data-i18n="nav.form_elements.form_input_grid">Input Grid</a>
              </li>
              <li><a class="menu-item" href="form-extended-inputs.html" data-i18n="nav.form_elements.form_extended_inputs">Extended Inputs</a>
              </li>
              <li><a class="menu-item" href="form-checkboxes-radios.html" data-i18n="nav.form_elements.form_checkboxes_radios">Checkboxes &amp; Radios</a>
              </li>
              <li><a class="menu-item" href="form-switch.html" data-i18n="nav.form_elements.form_switch">Switch</a>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.form_elements.form_select.main">Select</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="form-select2.html" data-i18n="nav.form_elements.form_select.form_select2">Select2</a>
                  </li>
                  <li><a class="menu-item" href="form-selectize.html" data-i18n="nav.form_elements.form_select.form_selectize">Selectize</a>
                  </li>
                  <li><a class="menu-item" href="form-selectivity.html" data-i18n="nav.form_elements.form_select.form_selectivity">Selectivity</a>
                  </li>
                  <li><a class="menu-item" href="form-select-box-it.html" data-i18n="nav.form_elements.form_select.form_select_box_it">Select Box It</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="form-dual-listbox.html" data-i18n="nav.form_elements.form_dual_listbox">Dual Listbox</a>
              </li>
              <li><a class="menu-item" href="form-tags-input.html" data-i18n="nav.form_elements.form_tags_input">Tags Input</a>
              </li>
              <li><a class="menu-item" href="form-validation.html" data-i18n="nav.form_elements.form_validation">Validation</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-screen-tablet"></i><span class="menu-title" data-i18n="nav.form_layouts.main">Form Layouts</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="form-layout-basic.html" data-i18n="nav.form_layouts.form_layout_basic">Basic Forms</a>
              </li>
              <li><a class="menu-item" href="form-layout-horizontal.html" data-i18n="nav.form_layouts.form_layout_horizontal">Horizontal Forms</a>
              </li>
              <li><a class="menu-item" href="form-layout-hidden-labels.html" data-i18n="nav.form_layouts.form_layout_hidden_labels">Hidden Labels</a>
              </li>
              <li><a class="menu-item" href="form-layout-form-actions.html" data-i18n="nav.form_layouts.form_layout_form_actions">Form Actions</a>
              </li>
              <li><a class="menu-item" href="form-layout-row-separator.html" data-i18n="nav.form_layouts.form_layout_row_separator">Row Separator</a>
              </li>
              <li><a class="menu-item" href="form-layout-bordered.html" data-i18n="nav.form_layouts.form_layout_bordered">Bordered</a>
              </li>
              <li><a class="menu-item" href="form-layout-striped-rows.html" data-i18n="nav.form_layouts.form_layout_striped_rows">Striped Rows</a>
              </li>
              <li><a class="menu-item" href="form-layout-striped-labels.html" data-i18n="nav.form_layouts.form_layout_striped_labels">Striped Labels</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-speech"></i><span class="menu-title" data-i18n="nav.form_wizard.main">Form Wizard</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="form-wizard-circle-style.html" data-i18n="nav.form_wizard.form_wizard_circle_style">Circle Style</a>
              </li>
              <li><a class="menu-item" href="form-wizard-notification-style.html" data-i18n="nav.form_wizard.form_wizard_notification_style">Notification Style</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="form-repeater.html"><i class="icon-shuffle"></i><span class="menu-title" data-i18n="nav.form_repeater.main">Form Repeater</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.tables">Tables</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Tables"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-bag"></i><span class="menu-title" data-i18n="nav.bootstrap_tables.main">Bootstrap Tables</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="table-basic.html" data-i18n="nav.bootstrap_tables.table_basic">Basic Tables</a>
              </li>
              <li><a class="menu-item" href="table-border.html" data-i18n="nav.bootstrap_tables.table_border">Table Border</a>
              </li>
              <li><a class="menu-item" href="table-sizing.html" data-i18n="nav.bootstrap_tables.table_sizing">Table Sizing</a>
              </li>
              <li><a class="menu-item" href="table-styling.html" data-i18n="nav.bootstrap_tables.table_styling">Table Styling</a>
              </li>
              <li><a class="menu-item" href="table-components.html" data-i18n="nav.bootstrap_tables.table_components">Table Components</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-share-alt"></i><span class="menu-title" data-i18n="nav.data_tables.main">DataTables</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="dt-basic-initialization.html" data-i18n="nav.data_tables.dt_basic_initialization">Basic Initialisation</a>
              </li>
              <li><a class="menu-item" href="dt-advanced-initialization.html" data-i18n="nav.data_tables.dt_advanced_initialization">Advanced initialisation</a>
              </li>
              <li><a class="menu-item" href="dt-styling.html" data-i18n="nav.data_tables.dt_styling">Styling</a>
              </li>
              <li><a class="menu-item" href="dt-data-sources.html" data-i18n="nav.data_tables.dt_data_sources">Data Sources</a>
              </li>
              <li><a class="menu-item" href="dt-api.html" data-i18n="nav.data_tables.dt_api">API</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-grid"></i><span class="menu-title" data-i18n="nav.datatable_extensions.main">DataTables Ext.</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="dt-extensions-autofill.html" data-i18n="nav.datatable_extensions.dt_extensions_autofill">AutoFill</a>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.datatable_extensions.datatable_buttons.main">Buttons</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="dt-extensions-buttons-basic.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_basic">Basic Buttons</a>
                  </li>
                  <li><a class="menu-item" href="dt-extensions-buttons-html-5-data-export.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_html_5_data_export">HTML 5 Data Export</a>
                  </li>
                  <li><a class="menu-item" href="dt-extensions-buttons-flash-data-export.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_flash_data_export">Flash Data Export</a>
                  </li>
                  <li><a class="menu-item" href="dt-extensions-buttons-column-visibility.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_column_visibility">Column Visibility</a>
                  </li>
                  <li><a class="menu-item" href="dt-extensions-buttons-print.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_print">Print</a>
                  </li>
                  <li><a class="menu-item" href="dt-extensions-buttons-api.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_api">API</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="dt-extensions-column-reorder.html" data-i18n="nav.datatable_extensions.dt_extensions_column_reorder">Column Reorder</a>
              </li>
              <li><a class="menu-item" href="dt-extensions-fixed-columns.html" data-i18n="nav.datatable_extensions.dt_extensions_fixed_columns">Fixed Columns</a>
              </li>
              <li><a class="menu-item" href="dt-extensions-key-table.html" data-i18n="nav.datatable_extensions.dt_extensions_key_table">Key Table</a>
              </li>
              <li><a class="menu-item" href="dt-extensions-row-reorder.html" data-i18n="nav.datatable_extensions.dt_extensions_row_reorder">Row Reorder</a>
              </li>
              <li><a class="menu-item" href="dt-extensions-select.html" data-i18n="nav.datatable_extensions.dt_extensions_select">Select</a>
              </li>
              <li><a class="menu-item" href="dt-extensions-fix-header.html" data-i18n="nav.datatable_extensions.dt_extensions_fix_header">Fix Header</a>
              </li>
              <li><a class="menu-item" href="dt-extensions-responsive.html" data-i18n="nav.datatable_extensions.dt_extensions_responsive">Responsive</a>
              </li>
              <li><a class="menu-item" href="dt-extensions-column-visibility.html" data-i18n="nav.datatable_extensions.dt_extensions_column_visibility">Column Visibility</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-list"></i><span class="menu-title" data-i18n="nav.handson_table.main">Handson Table</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="handson-table-appearance.html" data-i18n="nav.handson_table.handson_table_appearance">Appearance</a>
              </li>
              <li><a class="menu-item" href="handson-table-rows-columns.html" data-i18n="nav.handson_table.handson_table_rows_columns">Rows Columns</a>
              </li>
              <li><a class="menu-item" href="handson-table-rows-only.html" data-i18n="nav.handson_table.handson_table_rows_only">Rows Only</a>
              </li>
              <li><a class="menu-item" href="handson-table-columns-only.html" data-i18n="nav.handson_table.handson_table_columns_only">Columns Only</a>
              </li>
              <li><a class="menu-item" href="handson-table-data-operations.html" data-i18n="nav.handson_table.handson_table_data_operations">Data Operations</a>
              </li>
              <li><a class="menu-item" href="handson-table-cell-features.html" data-i18n="nav.handson_table.handson_table_cell_features">Cell Features</a>
              </li>
              <li><a class="menu-item" href="handson-table-cell-types.html" data-i18n="nav.handson_table.handson_table_cell_types">Cell Types</a>
              </li>
              <li><a class="menu-item" href="handson-table-integrations.html" data-i18n="nav.handson_table.handson_table_integrations">Integrations</a>
              </li>
              <li><a class="menu-item" href="handson-table-utilities.html" data-i18n="nav.handson_table.handson_table_utilities">Utilities</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="table-jsgrid.html"><i class="icon-book-open"></i><span class="menu-title" data-i18n="nav.table_jsgrid.main">jsGrid</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.addons">Add Ons</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Add Ons"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-note"></i><span class="menu-title" data-i18n="nav.editors.main">Editors</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="editor-quill.html" data-i18n="nav.editors.editor_quill">Quill</a>
              </li>
              <li><a class="menu-item" href="editor-ckeditor.html" data-i18n="nav.editors.editor_ckeditor">CKEditor</a>
              </li>
              <li><a class="menu-item" href="editor-summernote.html" data-i18n="nav.editors.editor_summernote">Summernote</a>
              </li>
              <li><a class="menu-item" href="editor-tinymce.html" data-i18n="nav.editors.editor_tinymce">TinyMCE</a>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.editors.code_editor_codemirror.main">Code Editor</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="code-editor-codemirror.html" data-i18n="nav.editors.code_editor_codemirror.code_editor_codemirror">CodeMirror</a>
                  </li>
                  <li><a class="menu-item" href="code-editor-ace.html" data-i18n="nav.editors.code_editor_codemirror.code_editor_ace">Ace</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-mouse"></i><span class="menu-title" data-i18n="nav.pickers.main">Pickers</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="pickers-date-&amp;-time-picker.html" data-i18n="nav.pickers.pickers_date_time_picker">Date &amp; Time Picker</a>
              </li>
              <li><a class="menu-item" href="pickers-color-picker.html" data-i18n="nav.pickers.pickers_color_picker">Color Picker</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-chemistry"></i><span class="menu-title" data-i18n="nav.jquery_ui.main">jQuery UI</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="jquery-ui-interactions.html" data-i18n="nav.jquery_ui.jquery_ui_interactions">Interactions</a>
              </li>
              <li><a class="menu-item" href="jquery-ui-navigations.html" data-i18n="nav.jquery_ui.jquery_ui_navigations">Navigations</a>
              </li>
              <li><a class="menu-item" href="jquery-ui-date-pickers.html" data-i18n="nav.jquery_ui.jquery_ui_date_pickers">Date Pickers</a>
              </li>
              <li><a class="menu-item" href="jquery-ui-autocomplete.html" data-i18n="nav.jquery_ui.jquery_ui_autocomplete">Autocomplete</a>
              </li>
              <li><a class="menu-item" href="jquery-ui-buttons-select.html" data-i18n="nav.jquery_ui.jquery_ui_buttons_select">Buttons &amp; Select</a>
              </li>
              <li><a class="menu-item" href="jquery-ui-slider-spinner.html" data-i18n="nav.jquery_ui.jquery_ui_slider_spinner">Slider &amp; Spinner</a>
              </li>
              <li><a class="menu-item" href="jquery-ui-dialog-tooltip.html" data-i18n="nav.jquery_ui.jquery_ui_dialog_tooltip">Dialog &amp; Tooltip</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="add-on-block-ui.html"><i class="icon-shield"></i><span class="menu-title" data-i18n="nav.add_on_block_ui.main">Block UI</span></a>
          </li>
          <li class=" nav-item"><a href="add-on-image-cropper.html"><i class="icon-crop"></i><span class="menu-title" data-i18n="nav.add_on_image_cropper.main">Image Cropper</span></a>
          </li>
          <li class=" nav-item"><a href="add-on-drag-drop.html"><i class="icon-cursor-move"></i><span class="menu-title" data-i18n="nav.add_on_drag_drop.main">Drag &amp; Drop</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-cloud-upload"></i><span class="menu-title" data-i18n="nav.file_uploaders.main">File Uploader</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="file-uploader-dropzone.html" data-i18n="nav.file_uploaders.file_uploader_dropzone">Dropzone</a>
              </li>
              <li><a class="menu-item" href="file-uploader-jquery.html" data-i18n="nav.file_uploaders.file_uploader_jquery">jQuery File Upload</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-calendar"></i><span class="menu-title" data-i18n="nav.event_calendars.main">Event Calendars</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#" data-i18n="nav.event_calendars.full_calender.main">Full Calendar</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="full-calender-basic.html" data-i18n="nav.event_calendars.full_calender.full_calender_basic">Basic</a>
                  </li>
                  <li><a class="menu-item" href="full-calender-events.html" data-i18n="nav.event_calendars.full_calender.full_calender_events">Events</a>
                  </li>
                  <li><a class="menu-item" href="full-calender-advance.html" data-i18n="nav.event_calendars.full_calender.full_calender_advance">Advance</a>
                  </li>
                  <li><a class="menu-item" href="full-calender-extra.html" data-i18n="nav.event_calendars.full_calender.full_calender_extra">Extra</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="calendars-clndr.html" data-i18n="nav.event_calendars.calendars_clndr">CLNDR</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-info"></i><span class="menu-title" data-i18n="nav.internationalization.main">Internationalization</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="i18n-resources.html" data-i18n="nav.internationalization.i18n_resources">Resources</a>
              </li>
              <li><a class="menu-item" href="i18n-xhr-backend.html" data-i18n="nav.internationalization.i18n_xhr_backend">XHR Backend</a>
              </li>
              <li><a class="menu-item" href="i18n-query-string.html?lng=en" data-i18n="nav.internationalization.i18n_query_string">Query String</a>
              </li>
              <li><a class="menu-item" href="i18n-on-init.html" data-i18n="nav.internationalization.i18n_on_init">On Init</a>
              </li>
              <li><a class="menu-item" href="i18n-after-init.html" data-i18n="nav.internationalization.i18n_after_init">After Init</a>
              </li>
              <li><a class="menu-item" href="i18n-fallback.html" data-i18n="nav.internationalization.i18n_fallback">Fallback</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.charts_maps">Charts &amp; Maps</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Charts &amp; Maps"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-social-google"></i><span class="menu-title" data-i18n="nav.google_charts.main">google Charts</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="google-bar-charts.html" data-i18n="nav.google_charts.google_bar_charts">Bar charts</a>
              </li>
              <li><a class="menu-item" href="google-line-charts.html" data-i18n="nav.google_charts.google_line_charts">Line charts</a>
              </li>
              <li><a class="menu-item" href="google-pie-charts.html" data-i18n="nav.google_charts.google_pie_charts">Pie charts</a>
              </li>
              <li><a class="menu-item" href="google-scatter-charts.html" data-i18n="nav.google_charts.google_scatter_charts">Scatter charts</a>
              </li>
              <li><a class="menu-item" href="google-bubble-charts.html" data-i18n="nav.google_charts.google_bubble_charts">Bubble charts</a>
              </li>
              <li><a class="menu-item" href="google-other-charts.html" data-i18n="nav.google_charts.google_other_charts">Other charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-pie-chart"></i><span class="menu-title" data-i18n="nav.echarts.main">Echarts</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="echarts-line-area-charts.html" data-i18n="nav.echarts.echarts_line_area_charts">Line &amp; Area charts</a>
              </li>
              <li><a class="menu-item" href="echarts-bar-column-charts.html" data-i18n="nav.echarts.echarts_bar_column_charts">Bar &amp; Column charts</a>
              </li>
              <li><a class="menu-item" href="echarts-pie-doughnut-charts.html" data-i18n="nav.echarts.echarts_pie_doughnut_charts">Pie &amp; Doughnut charts</a>
              </li>
              <li><a class="menu-item" href="echarts-scatter-charts.html" data-i18n="nav.echarts.echarts_scatter_charts">Scatter charts</a>
              </li>
              <li><a class="menu-item" href="echarts-radar-chord-charts.html" data-i18n="nav.echarts.echarts_radar_chord_charts">Radar &amp; Chord charts</a>
              </li>
              <li><a class="menu-item" href="echarts-funnel-gauges-charts.html" data-i18n="nav.echarts.echarts_funnel_gauges_charts">Funnel &amp; Gauges charts</a>
              </li>
              <li><a class="menu-item" href="echarts-combination-charts.html" data-i18n="nav.echarts.echarts_combination_charts">Combination charts</a>
              </li>
              <li><a class="menu-item" href="echarts-advance-charts.html" data-i18n="nav.echarts.echarts_advance_charts">Advance charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-graph"></i><span class="menu-title" data-i18n="nav.chartjs.main">Chartjs</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="chartjs-line-charts.html" data-i18n="nav.chartjs.chartjs_line_charts">Line charts</a>
              </li>
              <li><a class="menu-item" href="chartjs-bar-charts.html" data-i18n="nav.chartjs.chartjs_bar_charts">Bar charts</a>
              </li>
              <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html" data-i18n="nav.chartjs.chartjs_pie_doughnut_charts">Pie &amp; Doughnut charts</a>
              </li>
              <li><a class="menu-item" href="chartjs-scatter-charts.html" data-i18n="nav.chartjs.chartjs_scatter_charts">Scatter charts</a>
              </li>
              <li><a class="menu-item" href="chartjs-polar-radar-charts.html" data-i18n="nav.chartjs.chartjs_polar_radar_charts">Polar &amp; Radar charts</a>
              </li>
              <li><a class="menu-item" href="chartjs-advance-charts.html" data-i18n="nav.chartjs.chartjs_advance_charts">Advance charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-chart"></i><span class="menu-title" data-i18n="nav.d3_charts.main">D3 Charts</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="d3-line-chart.html" data-i18n="nav.d3_charts.d3_line_chart">Line Chart</a>
              </li>
              <li><a class="menu-item" href="d3-bar-chart.html" data-i18n="nav.d3_charts.d3_bar_chart">Bar Chart</a>
              </li>
              <li><a class="menu-item" href="d3-pie-chart.html" data-i18n="nav.d3_charts.d3_pie_chart">Pie Chart</a>
              </li>
              <li><a class="menu-item" href="d3-circle-diagrams.html" data-i18n="nav.d3_charts.d3_circle_diagrams">Circle Diagrams</a>
              </li>
              <li><a class="menu-item" href="d3-tree-chart.html" data-i18n="nav.d3_charts.d3_tree_chart">Tree Chart</a>
              </li>
              <li><a class="menu-item" href="d3-other-charts.html" data-i18n="nav.d3_charts.d3_other_charts">Other Charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-direction"></i><span class="menu-title" data-i18n="nav.c3_charts.main">C3 Charts</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="c3-line-chart.html" data-i18n="nav.c3_charts.c3_line_chart">Line Chart</a>
              </li>
              <li><a class="menu-item" href="c3-bar-pie-chart.html" data-i18n="nav.c3_charts.c3_bar_pie_chart">Bar &amp; Pie Chart</a>
              </li>
              <li><a class="menu-item" href="c3-axis-chart.html" data-i18n="nav.c3_charts.c3_axis_chart">Axis Chart</a>
              </li>
              <li><a class="menu-item" href="c3-data-chart.html" data-i18n="nav.c3_charts.c3_data_chart">Data Chart</a>
              </li>
              <li><a class="menu-item" href="c3-grid-chart.html" data-i18n="nav.c3_charts.c3_grid_chart">Grid Chart</a>
              </li>
              <li><a class="menu-item" href="c3-transform-chart.html" data-i18n="nav.c3_charts.c3_transform_chart">Transform Chart</a>
              </li>
              <li><a class="menu-item" href="c3-other-charts.html" data-i18n="nav.c3_charts.c3_other_charts">Other Charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-disc"></i><span class="menu-title" data-i18n="nav.chartist.main">Chartist</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="chartist-line-charts.html" data-i18n="nav.chartist.chartist_line_charts">Line charts</a>
              </li>
              <li><a class="menu-item" href="chartist-bar-charts.html" data-i18n="nav.chartist.chartist_bar_charts">Bar charts</a>
              </li>
              <li><a class="menu-item" href="chartist-pie-charts.html" data-i18n="nav.chartist.chartist_pie_charts">Pie charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-control-pause"></i><span class="menu-title" data-i18n="nav.dimple_charts.main">Dimple Charts</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="dimple-line-area-chart.html" data-i18n="nav.dimple_charts.dimple_line_area_chart">Line &amp; Area Chart</a>
              </li>
              <li><a class="menu-item" href="dimple-bar-column-chart.html" data-i18n="nav.dimple_charts.dimple_bar_column_chart">Bar &amp; Column Chart</a>
              </li>
              <li><a class="menu-item" href="dimple-pie-ring-chart.html" data-i18n="nav.dimple_charts.dimple_pie_ring_chart">Pie &amp; Ring Chart</a>
              </li>
              <li><a class="menu-item" href="dimple-step-chart.html" data-i18n="nav.dimple_charts.dimple_step_chart">Step Chart</a>
              </li>
              <li><a class="menu-item" href="dimple-scatter-chart.html" data-i18n="nav.dimple_charts.dimple_scatter_chart">Scatter Chart</a>
              </li>
              <li><a class="menu-item" href="dimple-bubble-chart.html" data-i18n="nav.dimple_charts.dimple_bubble_chart">Bubble Chart</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="morris-charts.html"><i class="icon-globe"></i><span class="menu-title" data-i18n="nav.morris_charts.main">Morris Charts</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-vector"></i><span class="menu-title" data-i18n="nav.flot_charts.main">Flot Charts</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="flot-line-charts.html" data-i18n="nav.flot_charts.flot_line_charts">Line charts</a>
              </li>
              <li><a class="menu-item" href="flot-bar-charts.html" data-i18n="nav.flot_charts.flot_bar_charts">Bar charts</a>
              </li>
              <li><a class="menu-item" href="flot-pie-charts.html" data-i18n="nav.flot_charts.flot_pie_charts">Pie charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="rickshaw-charts.html"><i class="icon-compass"></i><span class="menu-title" data-i18n="nav.rickshaw_charts.main">Rickshaw Charts</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-location-pin"></i><span class="menu-title" data-i18n="nav.maps.main">Maps</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#" data-i18n="nav.maps.google_maps.main">google Maps</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="gmaps-basic-maps.html" data-i18n="nav.maps.google_maps.gmaps_basic_maps">Maps</a>
                  </li>
                  <li><a class="menu-item" href="gmaps-services.html" data-i18n="nav.maps.google_maps.gmaps_services">Services</a>
                  </li>
                  <li><a class="menu-item" href="gmaps-overlays.html" data-i18n="nav.maps.google_maps.gmaps_overlays">Overlays</a>
                  </li>
                  <li><a class="menu-item" href="gmaps-routes.html" data-i18n="nav.maps.google_maps.gmaps_routes">Routes</a>
                  </li>
                  <li><a class="menu-item" href="gmaps-utils.html" data-i18n="nav.maps.google_maps.gmaps_utils">Utils</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="#" data-i18n="nav.maps.vector_maps.main">Vector Maps</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="#" data-i18n="nav.maps.vector_maps.jquery_mapael.main">jQuery Mapael</a>
                    <ul class="menu-content">
                      <li><a class="menu-item" href="vector-maps-mapael-basic.html" data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_basic">Basic Maps</a>
                      </li>
                      <li><a class="menu-item" href="vector-maps-mapael-advance.html" data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_advance">Advance Maps</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="menu-item" href="vector-maps-jvector.html" data-i18n="nav.maps.vector_maps.jvector_maps">jVector Map</a>
                  </li>
                  <li><a class="menu-item" href="vector-maps-jqv.html" data-i18n="nav.maps.vector_maps.vector_maps_jqv">JQV Map</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Support"></i>
          </li>
          <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="icon-support"></i><span class="menu-title" data-i18n="nav.support_raise_support.main">Raise Support</span></a>
          </li>
          <li class=" nav-item"><a href="https://pixinvent.com/robust-bootstrap-admin-template/documentation"><i class="icon-notebook"></i><span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        
        </div>
        <div class="content-body"><!-- Sales stats -->
        <?php 
                        // Application 
                $app = (isset($_GET['module']) ? $_GET['module'] : 'content');
                $file = (isset($_GET['page']) ? $_GET['page'] : 'Dashboard');

                if (file_exists( $app . '/' . $file . '.php')) {
                    include  $app . '/' . $file . '.php';
                } else {
                    include  'error-page.html';
                }
                ?>

<!--/ most selling products-->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block"><a class="customizer-close" href="#"><i class="ft-x font-medium-3"></i></a><a class="customizer-toggle bg-danger box-shadow-3" href="#"><i class="ft-settings font-medium-3 spinner white"></i></a><div class="customizer-content p-2">
	<h4 class="text-uppercase mb-0">Theme Customizer</h4>
	<hr>
	<p>Customize & Preview in Real Time</p>
	<h5 class="mt-1 mb-1 text-bold-500">Menu Color Options</h5>
	<div class="form-group">
		<!-- Outline Button group -->
		<div class="btn-group customizer-sidebar-options" role="group" aria-label="Basic example">
			<button type="button" class="btn btn-outline-info" data-sidebar="menu-light">Light Menu</button>
			<button type="button" class="btn btn-outline-info" data-sidebar="menu-dark">Dark Menu</button>
		</div>
	</div>
	<hr>
	<h5 class="mt-1 text-bold-500">Layout Options</h5>
	<ul class="nav nav-tabs nav-underline nav-justified layout-options">
		<li class="nav-item">
			<a class="nav-link layouts active" id="baseIcon-tab21" data-toggle="tab" aria-controls="tabIcon21" href="#tabIcon21" aria-expanded="true">Layouts</a>
		</li>
		<li class="nav-item">
			<a class="nav-link navigation" id="baseIcon-tab22" data-toggle="tab" aria-controls="tabIcon22" href="#tabIcon22" aria-expanded="false">Navigation</a>
		</li>
		<li class="nav-item">
			<a class="nav-link navbar" id="baseIcon-tab23" data-toggle="tab" aria-controls="tabIcon23" href="#tabIcon23" aria-expanded="false">Navbar</a>
		</li>
	</ul>
	<div class="tab-content px-1 pt-1">
		<div role="tabpanel" class="tab-pane active" id="tabIcon21" aria-expanded="true" aria-labelledby="baseIcon-tab21">
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="collapsed-sidebar" id="collapsed-sidebar">
					<label class="custom-control-label" for="collapsed-sidebar">Collapsed Menu</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="fixed-layout" id="fixed-layout">
					<label class="custom-control-label" for="fixed-layout">Fixed Layout</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
					<label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="static-layout" id="static-layout">
					<label class="custom-control-label" for="static-layout">Static Layout</label>
				</div>
			</p>
		</div>
		<div class="tab-pane" id="tabIcon22" aria-labelledby="baseIcon-tab22">
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="native-scroll" id="native-scroll">
					<label class="custom-control-label" for="native-scroll">Native Scroll</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="right-side-icons" id="right-side-icons">
					<label class="custom-control-label" for="right-side-icons">Right Side Icons</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="bordered-navigation" id="bordered-navigation">
					<label class="custom-control-label" for="bordered-navigation">Bordered Navigation</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="flipped-navigation" id="flipped-navigation">
					<label class="custom-control-label" for="flipped-navigation">Flipped Navigation</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="collapsible-navigation" id="collapsible-navigation">
					<label class="custom-control-label" for="collapsible-navigation">Collapsible Navigation</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="static-navigation" id="static-navigation">
					<label class="custom-control-label" for="static-navigation">Static Navigation</label>
				</div>
			</p>
		</div>
		<div class="tab-pane" id="tabIcon23" aria-labelledby="baseIcon-tab23">
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="brand-center" id="brand-center">
					<label class="custom-control-label" for="brand-center">Brand Center</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="navbar-static-top" id="navbar-static-top">
					<label class="custom-control-label" for="navbar-static-top">Static Top</label>
				</div>
			</p>
		</div>
	</div>
	<hr>
	<h5 class="mt-1 text-bold-500">Navigation Color Options</h5>
	<ul class="nav nav-tabs nav-underline nav-justified color-options">
		<li class="nav-item">
			<a class="nav-link nav-semi-light active" id="color-opt-1" data-toggle="tab" aria-controls="clrOpt1" href="#clrOpt1" aria-expanded="false">Semi Light</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav-semi-dark" id="color-opt-2" data-toggle="tab" aria-controls="clrOpt2" href="#clrOpt2" aria-expanded="false">Semi Dark</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav-dark" id="color-opt-3" data-toggle="tab" aria-controls="clrOpt3" href="#clrOpt3" aria-expanded="false">Dark</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav-light" id="color-opt-4" data-toggle="tab" aria-controls="clrOpt4" href="#clrOpt4" aria-expanded="true">Light</a>
		</li>
	</ul>
	<div class="tab-content px-1 pt-1">
		<div role="tabpanel" class="tab-pane active" id="clrOpt1" aria-expanded="true" aria-labelledby="color-opt-1">
			<div class="row">
				<div class="col-6">
					<h6>Solid</h6>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="default">
							<label class="custom-control-label" for="default">Default</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="primary">
							<label class="custom-control-label" for="primary">Primary</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="danger">
							<label class="custom-control-label" for="danger">Danger</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-success" id="success">
							<label class="custom-control-label" for="success">Success</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="blue">
							<label class="custom-control-label" for="blue">Blue</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="cyan">
							<label class="custom-control-label" for="cyan">Cyan</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="pink">
							<label class="custom-control-label" for="pink">Pink</label>
						</div>
					</p>
				</div>
				<div class="col-6">
					<h6>Gradient</h6>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" checked class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue">
							<label class="custom-control-label" for="bg-gradient-x-grey-blue">Default</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary">
							<label class="custom-control-label" for="bg-gradient-x-primary">Primary</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger">
							<label class="custom-control-label" for="bg-gradient-x-danger">Danger</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success">
							<label class="custom-control-label" for="bg-gradient-x-success">Success</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue">
							<label class="custom-control-label" for="bg-gradient-x-blue">Blue</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan">
							<label class="custom-control-label" for="bg-gradient-x-cyan">Cyan</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink">
							<label class="custom-control-label" for="bg-gradient-x-pink">Pink</label>
						</div>
					</p>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="clrOpt2" aria-labelledby="color-opt-2">
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-sdark-clr" checked class="custom-control-input bg-default" data-bg="bg-default" id="opt-default">
					<label class="custom-control-label" for="opt-default">Default</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="opt-primary">
					<label class="custom-control-label" for="opt-primary">Primary</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="opt-danger">
					<label class="custom-control-label" for="opt-danger">Danger</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="opt-success">
					<label class="custom-control-label" for="opt-success">Success</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="opt-blue">
					<label class="custom-control-label" for="opt-blue">Blue</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="opt-cyan">
					<label class="custom-control-label" for="opt-cyan">Cyan</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-sdark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="opt-pink">
					<label class="custom-control-label" for="opt-pink">Pink</label>
				</div>
			</p>
		</div>
		<div class="tab-pane" id="clrOpt3" aria-labelledby="color-opt-3">
			<div class="row">
				<div class="col-6">
					<h3>Solid</h3>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="solid-blue-grey">
							<label class="custom-control-label" for="solid-blue-grey">Default</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="solid-primary">
							<label class="custom-control-label" for="solid-primary">Primary</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="solid-danger">
							<label class="custom-control-label" for="solid-danger">Danger</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="solid-success">
							<label class="custom-control-label" for="solid-success">Success</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="solid-blue">
							<label class="custom-control-label" for="solid-blue">Blue</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="solid-cyan">
							<label class="custom-control-label" for="solid-cyan">Cyan</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="solid-pink">
							<label class="custom-control-label" for="solid-pink">Pink</label>
						</div>
					</p>
				</div>

				<div class="col-6">
					<h3>Gradient</h3>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue1">
							<label class="custom-control-label" for="bg-gradient-x-grey-blue1">Default</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary1">
							<label class="custom-control-label" for="bg-gradient-x-primary1">Primary</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger1">
							<label class="custom-control-label" for="bg-gradient-x-danger1">Danger</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success1">
							<label class="custom-control-label" for="bg-gradient-x-success1">Success</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue1">
							<label class="custom-control-label" for="bg-gradient-x-blue1">Blue</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan1">
							<label class="custom-control-label" for="bg-gradient-x-cyan1">Cyan</label>
						</div>
					</p>
					<p>
						<div class="d-inline-block custom-control custom-radio">
							<input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink1">
							<label class="custom-control-label" for="bg-gradient-x-pink1">Pink</label>
						</div>
					</p>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="clrOpt4" aria-labelledby="color-opt-4">
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey bg-lighten-4" id="light-blue-grey">
					<label class="custom-control-label" for="light-blue-grey">Default</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-primary" data-bg="bg-primary bg-lighten-4" id="light-primary">
					<label class="custom-control-label" for="light-primary">Primary</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-danger" data-bg="bg-danger bg-lighten-4" id="light-danger">
					<label class="custom-control-label" for="light-danger">Danger</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-success" data-bg="bg-success bg-lighten-4" id="light-success">
					<label class="custom-control-label" for="light-success">Success</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-blue" data-bg="bg-blue bg-lighten-4" id="light-blue">
					<label class="custom-control-label" for="light-blue">Blue</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan bg-lighten-4" id="light-cyan">
					<label class="custom-control-label" for="light-cyan">Cyan</label>
				</div>
			</p>
			<p>
				<div class="d-inline-block custom-control custom-radio">
					<input type="radio" name="nav-light-clr" class="custom-control-input bg-pink" data-bg="bg-pink bg-lighten-4" id="light-pink">
					<label class="custom-control-label" for="light-pink">Pink</label>
				</div>
			</p>
		</div>
	</div>
</div>
    </div>

    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer>
    
    
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/extensions/moment.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/extensions/underscore-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/extensions/clndr.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/charts/echarts/echarts.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/pages/dashboard-ecommerce.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    
  </body>
</html>