<?php
    $host = 'http://' . $_SERVER['HTTP_HOST']; // для правильной подгрузки стилей и скриптов
?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo $host; ?>/client/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>Hello <?php echo $data['inf']['name']?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo $host.'/'.$data['inf']['img']?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Max</h2>
                 <a style="cursor: pointer;" data-toggle="modal" class="edit-button" data-target="#editClient">Edit Profile</a>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><a href="<?php echo $host; ?>/client/dashboard">HOME</a></h3>
                <ul class="nav side-menu">
                  <!-- <li><a><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#" class="edit-client" data-toggle="modal" class="edit-button" data-target="#client" >Add new clients</a></li>
                      <li><a href="index2.html">List of clients</a></li>
                      <! <li><a href="index3.html">Dashboard3</a></li>
                     </ul>
                  </li> -->
                  
                 <!--  <li><a><i class="fa fa-edit"></i> Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Setting Form 1</a></li>
                      <li><a href="#">Setting Form 2</a></li>
                      <li><a href="#">Setting Form 3</a></li>
                      <li><a href="#">Setting Form 4</a></li>
                      <li><a href="#">Setting Form 5</a></li>
                      <! <li><a href="form_buttons.html">Form Buttons</a></li> -->
                  <!--   </ul>
                  </li> -->
                 <li><a><i class="fa fa-desktop"></i> Analitics <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo $host; ?>/client/analitics">Overview</a></li>
                      <li><a href="<?php echo $host; ?>/client/analitics2">Sessions</a></li>
                      <!-- <li><a href="#">Reports 2</a></li>
                      <li><a href="#">Reports 3</a></li>
                      <li><a href="#">Reports 4</a></li>
                      <li><a href="#">Reports 5</a></li>
                      <li><a href="#">Reports 6</a></li>
                      <li><a href="#">Reports 7</a></li> -->

                    </ul>
                  </li>
              
                </ul>
              </div>
         
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a href="<?php echo $host; ?>/index/logout" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $host.'/'.$data['inf']['img']?>" alt="">Max
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a data-toggle="modal" class="edit-button" data-target="#editClient"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo $host; ?>/index/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

        <h1>Hello</h1>

        <h1>Analitics</h1>
<script>
(function(w,d,s,g,js,fs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
  js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
}(window,document,'script'));
</script>
<div id="embed-api-auth-container"></div>
<div id="chart-container"></div>
<div id="view-selector-container"></div>
<script>

gapi.analytics.ready(function() {

  /**
   * Authorize the user immediately if the user has already granted access.
   * If no access has been created, render an authorize button inside the
   * element with the ID "embed-api-auth-container".
   */
  gapi.analytics.auth.authorize({
    container: 'embed-api-auth-container',
    clientid: '201890636942-vr0pgotfrschlt1p8o5q9v3u9bqhnmdu.apps.googleusercontent.com'
  });


  /**
   * Create a new ViewSelector instance to be rendered inside of an
   * element with the id "view-selector-container".
   */
  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector-container'
  });

  // Render the view selector to the page.
  viewSelector.execute();


  /**
   * Create a new DataChart instance with the given query parameters
   * and Google chart options. It will be rendered inside an element
   * with the id "chart-container".
   */
  var dataChart = new gapi.analytics.googleCharts.DataChart({
    query: {
      metrics: 'ga:sessions',
      dimensions: 'ga:date',
      'start-date': '30daysAgo',
      'end-date': 'yesterday'
    },
    chart: {
      container: 'chart-container',
      type: 'LINE',
      options: {
        width: '100%'
      }
    }
  });


  /**
   * Render the dataChart on the page whenever a new view is selected.
   */
  viewSelector.on('change', function(ids) {
    dataChart.set({query: {ids: ids}}).execute();
  });

});
</script>



      </div>  

  <div class="modal fade" id="editClient"  tabindex="-1" role="dialog" aria-labelledby="editCampaign">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">Update profile: </h4>
        </div>

        <form id="editClientForm" action="<?php echo $host . "/client/"; ?>UpdateProfile" method="post">
          <div class="modal-body">
              <div class='form-group'>
                <p>Name</p>
                <input type="text" class="form-control" name="name" value="<?php echo $data['inf']['name']?>" placeholder = "Name" />
                </div>
              <div class='form-group'>
                <p>Email</p>
                <input type="email" class="form-control" name="email" value="<?php echo $data['inf']['email']?>" placeholder = "Email" />
                </div>
              <div class='form-group'>
                <p>Password</p>
                <input type="password" class="form-control" name="password" value="<?php echo $data['inf']['password']?>" placeholder = "Password" />
              </div>
              <div class='form-group'>
                <p>Address</p>
                <input type="address" class="form-control" name="address" value="<?php echo $data['inf']['address']?>" placeholder = "Address" />
              </div>
              <div class='form-group'>
                <p>Phone</p>
                <input type="phone" class="form-control" name="phone" value="<?php echo $data['inf']['phone']?>" placeholder = "Phone" />
              </div>
              <div class='form-group'>
                <p>URL</p>
                <input type="text" class="form-control" name="url" value="<?php echo $data['inf']['url']?>" placeholder = "Url" />
              </div>
              <div class='form-group'>
                <p>Notes</p>      
                <input type="text" class="form-control" name="notes" value="<?php echo $data['inf']['notes']?>" placeholder = "Notes" />

                <!-- <div class="bg-success success"></div> -->
              </div>
              <!-- <div class='form-group'>
                <label for="uploadbtn" class="uploadButton">Update logo</label>
                <input id="uploadbtn" type="file" class="form-control" style="opacity: 0; z-index: -1;" name="image"/>
              </div> -->
              <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update info</button>
        </div>
            </div>
          </div>
        
      </form>
    </div>
  </div>
</div>

                <div class="clearfix"></div>
         
          <br />

          <div class="row">


          

            <div class="col-md-4 col-sm-4 col-xs-12">
             
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            JoinToIt! <!-- <a href="https://colorlib.com">Colorlib</a> -->
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
