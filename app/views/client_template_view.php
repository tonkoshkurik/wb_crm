<!DOCTYPE html>
<html>
<head>
  <title>Lead Point</title>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <meta charset="UTF-8">
  <meta name="description" content="Lead Point system" />

  <!-- Styles -->
  <?php
    $host = 'http://' . $_SERVER['HTTP_HOST']; // для правильной подгрузки стилей и скриптов
  ?> 

  <link rel="icon" href="http://www.energysmart.com.au/edm-quote/images/favicons/favicon.ico">
  <link href="<?php echo $host; ?>/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet" type="text/css"//>
  <link href="<?php echo $host; ?>/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet" type="text/css"//>
  <link href="<?php echo $host; ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $host; ?>/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $host; ?>/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $host; ?>/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $host; ?>/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $host; ?>/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $host; ?>/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $host; ?>/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="<?php echo $host; ?>/assets/plugins/datatables/css/jquery.datatables.min.css">
  <!-- Theme Styles -->
  <link href="<?php echo $host; ?>/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $host; ?>/assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $host; ?>/assets/css/custom.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="<?php echo $host; ?>/assets/plugins/bootstrap-datepicker/css/datepicker.css">
  <link rel="stylesheet" href="<?php echo $host; ?>/css/bootstrap-switch.min.css">
  <style>
    div.checker {
      display: none;
    }
  </style>
  <link rel="stylesheet" href="<?php echo $host; ?>/css/style.css" type="text/css" />
  <script src="<?php echo $host; ?>/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
  <script src="<?php echo $host; ?>/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="<?php echo $body_class; ?>">
<!-- Javascripts -->
<script src="<?php echo $host; ?>/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/datatables/js/jquery.datatables.min.js"></script>
<div class="overlay"></div>
<form class="search-form" action="#" method="GET">
  <div class="input-group">
    <input type="text" name="search" class="form-control search-input" placeholder="Search...">
    <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
  </div><!-- Input Group -->
</form><!-- Search Form -->
<main class="page-content content-wrap container">
  <div class="navbar">
    <div class="navbar-inner">
      <div class="sidebar-pusher">
        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <div class="logo-box">
        <a href="admin" class="logo-text"><span>Lead Point</span></a>
      </div><!-- Logo Box -->
      <div class="search-button">
        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
      </div>
      <div class="topmenu-outer">
        <div class="top-menu">
          <ul class="nav navbar-nav navbar-left">
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
            </li>
<!--            <li>-->
<!--              <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>-->
<!--            </li>-->
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
            </li>
            <li class="dropdown">
<!--              <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">-->
<!--                <i class="fa fa-cogs"></i>-->
<!--              </a>-->
              <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                <li class="li-group">
                  <ul class="list-unstyled">
                    <li class="no-link" role="presentation">
                      Fixed Header
                      <div class="ios-switch pull-right switch-md">
                        <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="li-group">
                  <ul class="list-unstyled">
                    <li class="no-link" role="presentation">
                      Fixed Sidebar
                      <div class="ios-switch pull-right switch-md">
                        <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                      </div>
                    </li>
                    <li class="no-link" role="presentation">
                      Horizontal bar
                      <div class="ios-switch pull-right switch-md">
                        <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                      </div>
                    </li>
                    <li class="no-link" role="presentation">
                      Toggle Sidebar
                      <div class="ios-switch pull-right switch-md">
                        <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                      </div>
                    </li>
                    <li class="no-link" role="presentation">
                      Compact Menu
                      <div class="ios-switch pull-right switch-md">
                        <input type="checkbox" class="js-switch pull-right compact-menu-check">
                      </div>
                    </li>
                    <li class="no-link" role="presentation">
                      Hover Menu
                      <div class="ios-switch pull-right switch-md">
                        <input type="checkbox" class="js-switch pull-right hover-menu-check">
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="li-group">
                  <ul class="list-unstyled">
                    <li class="no-link" role="presentation">
                      Boxed Layout
                      <div class="ios-switch pull-right switch-md">
                        <input type="checkbox" class="js-switch pull-right boxed-layout-check" checked>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="li-group">
                  <ul class="list-unstyled">
                    <li class="no-link" role="presentation">
                      Choose Theme Color
                      <div class="color-switcher">
                        <a class="colorbox color-blue" href="?theme=blue" title="Blue Theme" data-css="blue"></a>
                        <a class="colorbox color-green" href="?theme=green" title="Green Theme" data-css="green"></a>
                        <a class="colorbox color-red" href="?theme=red" title="Red Theme" data-css="red"></a>
                        <a class="colorbox color-white" href="?theme=white" title="White Theme" data-css="white"></a>
                        <a class="colorbox color-purple" href="?theme=purple" title="purple Theme" data-css="purple"></a>
                        <a class="colorbox color-dark" href="?theme=dark" title="Dark Theme" data-css="dark"></a>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
            </li>
            <li>
              <a href="/admin/logout" class="log-out waves-effect waves-button waves-classic">
                <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
              </a>
            </li>
          </ul><!-- Nav -->
        </div><!-- Top Menu -->
      </div>
    </div>
  </div><!-- Navbar -->
  <div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
      <?php if(isset($_COOKIE["user_name"])) { ?>
      <div class="sidebar-header">
        <div class="sidebar-profile">
          <a href="javascript:void(0);" id="profile-menu-link">
            <div class="sidebar-profile-details">
              <span>Hello,</span>
              <span><?php echo $_COOKIE["user_name"]; ?><br><small></small></span>
            </div>
          </a>
        </div>
      </div>
      <?php }  else echo "<br>"; ?>
      <ul class="menu accordion-menu">
        <li><a href="<?php echo __HOST__; ?>/client/dashboard" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
        <li><a href="<?php echo __HOST__; ?>/client/profile" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Profile</p></a></li>

        <!-- <li><a href="<?php // echo __HOST__; ?>/campaigns/" class="waves&#45;effect waves&#45;button"><span class="menu&#45;icon glyphicon glyphicon&#45;briefcase"></span><p>Campaigns</p></a> -->
        <!-- </li> -->
        <li><a href="<?php echo __HOST__; ?>/client_leads/" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-th"></span><p>Leads</p></a>
        </li>
<!--        <li ><a href="--><?php //echo __HOST__; ?><!--/client_reports/" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-stats"></span><p>Reports</p></a>-->
<!--        </li>-->
      </ul>
    </div><!-- Page Sidebar Inner -->
  </div><!-- Page Sidebar -->
  <div class="page-inner">
    <div class="page-title">
<!--      <h3>--><?php //echo $page_title ?><!--</h3>-->
      <div class="page-breadcrumb">
<!--        <ol class="breadcrumb">-->
<!--          <li><a href="index">Home</a></li>-->
<!--          <li><a href="#">Layouts</a></li>-->
<!--          <li class="active">Boxed Page</li>-->
<!--        </ol>-->
      </div>
    </div>
    <div id="main-wrapper">
      <div class="row">

        <?php include 'app/views/'.$content_view; ?>

      </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
      <p class="no-s">2016 &copy; Lead Point System.</p>
    </div>
  </div><!-- Page Inner -->
</main><!-- Page Content -->
<nav class="cd-nav-container" id="cd-nav">
  <header>
    <h3>Navigation</h3>
    <a href="#0" class="cd-close-nav">Close</a>
  </header>
  <ul class="cd-nav list-unstyled">
    <li class="cd-selected" data-menu="index">
      <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
        <p>Dashboard</p>
      </a>
    </li>
    <li data-menu="profile">
      <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
        <p>Profile</p>
      </a>
    </li>
    <li data-menu="inbox">
      <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
        <p>Mailbox</p>
      </a>
    </li>
    <li data-menu="#">
      <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
        <p>Tasks</p>
      </a>
    </li>
    <li data-menu="#">
      <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
        <p>Settings</p>
      </a>
    </li>
    <li data-menu="calendar">
      <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
        <p>Calendar</p>
      </a>
    </li>
  </ul>
</nav>
<div class="cd-overlay"></div>


<script src="<?php echo $host; ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/pace-master/pace.min.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/switchery/switchery.min.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/offcanvasmenueffects/js/main.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/waves/waves.min.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/3d-bold-navigation/js/main.js"></script>
<script src="<?php echo $host; ?>/assets/js/modern.min.js"></script>
<script src="<?php echo $host; ?>/js/bootstrap-switch.min.js"></script>
<script src="<?php echo $host; ?>/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script>
    // $(document).ready(function(){
    //   $("select, input:checkbox, input:radio, input:file").uniform();
    // }
  </script>
</body>
</html>
