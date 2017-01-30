<style type="text/css">
 .round {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 3px solid #e5dee5;
   }

    .sign {
    float: left; /* Выравнивание по правому краю */
    padding: 7px; /* Поля внутри блока */
    margin: 10px 0 5px 5px; /* Отступы вокруг */
   }

   .name_position{
    text-align: center;
   }

   *{
    padding: 0;
    margin: 0;
}

.home-active{
    width: 300px;
    height: 300px;   
    position: relative;
    text-align: center;
    margin: 0 auto;
}
.home-active img{
    width: 300px;
    height: 300px;     
}
 
.block-hidden{    
    display: none;
}

.home-active:hover .block-hidden{
    width: 100%;
    height: 100%;
    display: block;
    position: absolute; top: 0; left: 0;
    background: rgba(0,0,0,0.7);
    color: #fff;
}
.block-hidden h2{
    position: absolute; top: 5%; left: 5%;    
}
.block-hidden .read-more{
    margin-top: 50%;
    text-align: center;
    cursor: pointer;
    /*text-overflow: clip;*/
     /*bottom: 5%; right: 5%;    */
}
.block-hidden .read-more a{
    color: #fff;    
}

ul.integrations-list{
    margin:0;
    padding:0;
    list-style:none;
}
 ul.integrations-list li{
     margin:0;
     padding:20px 40px;
     /*background: #f8f8f8;*/
     border-top:1px solid #dddddd;
 }
 ul.integrations-list li:first-child{
     border-top:none;
 }
.google-analitics-logo, .google-console-logo{
    position:relative;
}
.google-analitics-logo::before,
.google-console-logo::before{
    content:'';
    position:absolute;
    top:50%;
    margin-top:-13px;
    left:0px;
    width:25px;
    height:25px;

}
 .google-analitics-logo::before{
     background: url(/images/google-analytics-logo.png) no-repeat;
     background-size:cover;
 }
.google-console-logo::before{
    left:1px;
    background: url(/images/googleWebmasterToolsIcon.svg) no-repeat;
    background-size:cover;
}
.connect{
    display:block;
    float:right;
    padding:3px 7px;
    background: #2985cc;
    border:1px solid:#2985cc;
    border-radius:7px;
    color:#fff;
    font-size:0.8em;

    cursor:pointer;
}
 .connect:hover{
     background: #1f6499;
 }
 .disconnect{
     display:block;
     display:none;
     float:right;
     padding:3px 7px;
     background: #ff3a33;
     border:1px solid:#2985cc;
     border-radius:7px;
     color: #fff;
     font-size:0.8em;
     cursor:pointer;
 }
 .disconnect:hover{
     background: #f00;
 }
 .analytics-connection-container{
     display:none;
 }
</style>
<body class="nav-md">
<script src="<?=__HOST__?>/vendors/jquery/dist/jquery.min.js"></script>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/agency/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>Jointoit!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
       <!--      <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo $host.'/'.$data['inf']['img']?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Artur</h2>
                 <a href="/agency/infagency">Profile</a>
              </div>
            </div> -->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <!--   <li><a><i class="fa fa-home"></i> Clients <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#" class="edit-client" data-toggle="modal" class="edit-button" data-target="#client" >Add new clients</a></li>
                      <li><a href="/agency/allclients">List of clients</a></li>
                    </ul>
                  </li> -->
                  <li><a><i class="fa fa-edit"></i> Setting <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Setting Form 1</a></li>
                      <li><a href="#">Setting Form 2</a></li>
                      <li><a href="#">Setting Form 3</a></li>
                      <li><a href="#">Setting Form 4</a></li>
                      <li><a href="#">Setting Form 5</a></li>
                      <!-- <li><a href="form_buttons.html">Form Buttons</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/client/clientanalytics?id=<?=$_GET['id'] ?>">Reports 1</a></li>
                        <li><a href="/client/clientanalyticspdf?id=<?=$_GET['id'] ?>">Reports 1 PDF</a></li>
                      <li><a href="/searchconsole/searchconsole">Search console</a></li>
                      <li><a href="#">Reports 4</a></li>
                      <li><a href="#">Reports 5</a></li>
                      <li><a href="#">Reports 6</a></li>
                      <li><a href="#">Reports 7</a></li>
 <!--                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li> -->
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
              <a data-toggle="tooltip" data-placement="top" title="Logout">
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
                    <img src="<?php echo $host.'/'.$data['info']['imglogo']?>" alt=""><?php echo $data['info']['name_agency'];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo $host.'/agency/infagency'?>"> Profile</a></li>
                  <!--   <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li> -->
                    <!-- <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="<?php echo $host.'/'.'index/logout'; ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li>
                    <a href="#" class="edit-client" data-toggle="modal" class="edit-button" data-target="#client" >
                      <!-- <span class="badge bg-red pull-right">50%</span> -->
                      <span>Add new client</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $host.'/'.'agency/dashboard'; ?>">
                      <!-- <span class="badge bg-red pull-right">50%</span> -->
                      <span>All clients</span>
                    </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
<div class="right_col" role="main">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#client">Client</a></li>
        <li><a data-toggle="tab" href="#integrations">Integrations</a></li>
    </ul>

    <div class="tab-content">

        <div id="client" class="tab-pane fade in active">
            <h2>Client</h2>
            <!--    <input type='hidden' name='id_client' value=''/>
            <div class='form-group'>
              <label>Name</label>
              <input class="form-control" type="text" value="" name="name" >
            </div> -->
            <div class="col-md-4">
                <div class="home-active">
                    <img src="<?php echo $host.'/'.$data['inf']['img']?>" style="width:304px;height:228px;" alt="Mountain View" >
                    <div class="block-hidden">
                        <div data-toggle="modal" data-target="#editimg" class="read-more">Edit image</div>
                    </div>

                </div>
                <table class="table table-hover">
                    <input type='hidden' name='id_client' value='<?php echo $data['inf']['id']?>'/>
                    <tr>
                        <th>Name: </th><td><?php echo $data['inf']['name']?></td>
                    </tr>
                    <tr>
                        <th>Email: </th><td><?php echo $data['inf']['email']?></td>
                    </tr>
                    <tr>
                        <th>Password: </th><td>****</td>
                    </tr>
                    <tr>
                        <th>Address: </th><td><?php echo $data['inf']['address']?></td>
                    </tr>
                    <tr>
                        <th>Phone: </th><td><?php echo $data['inf']['phone']?></td>
                    </tr>
                    <tr>
                        <th>URL: </th><td><?php echo $data['inf']['url']?></td>
                    </tr>
                    <tr>
                        <th>Notes: </th><td><?php echo $data['inf']['notes']?></td>
                    </tr>
                    <!-- <a href="#" class="edit-client" data-toggle="modal" class="edit-button" data-target="#edit" >Edit</a> -->
                </table>
                <div style="position:relative;top:20px;">
                    <button style="margin-top:-35px;" type="submit" name="id" value="<?php echo $data['inf']['id']?>" data-toggle="modal" data-target="#edit" class="btn btn-primary">Edit</button>
                </div>
            </div>

            <div class="modal fade" id="editimg"  tabindex="-1" role="dialog" aria-labelledby="editCampaign">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Upload new image: </h4>
                        </div>


                        <form id="editC" enctype="multipart/form-data" action="<?php echo $host . "/client/"; ?>updateimg" method="post">
                            <div class="modal-body">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $data['inf']['id']?>" />
                                <div class='form-group'>
                                    <input type="file" class="form-control" name="userfile" required />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Closed</button>
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </div>
                    </div>

                    </form>
                </div>
            </div>


            <div class="modal fade" id="edit"  tabindex="-1" role="dialog" aria-labelledby="editCampaign">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Edit: </h4>
                        </div>


                        <form id="editCli" enctype="multipart/form-data" action="<?php echo $host . "/client/"; ?>updateclient" method="post">
                            <div class="modal-body">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $data['inf']['id']?>" />

                                <div class='form-group'>
                                    <label>Name:</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $data['inf']['name']?>" placeholder = "Name" required />
                                </div>
                                <div class='form-group'>
                                    <label>Email:</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $data['inf']['email']?>" placeholder = "Email" required />
                                </div>
                                <div class='form-group'>
                                    <label>Password:</label>
                                    <input type="password" class="form-control" name="password" placeholder = "Password" />
                                </div>
                                <div class='form-group'>
                                    <label>Address:</label>
                                    <input type="text" class="form-control" name="address" value="<?php echo $data['inf']['address']?>" placeholder = "Address" required />
                                </div>
                                <div class='form-group'>
                                    <label>Phone:</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo $data['inf']['phone']?>" placeholder = "Phone" required />
                                </div>
                                <div class='form-group'>
                                    <label>URL:</label>
                                    <input type="text" class="form-control" name="url" value="<?php echo $data['inf']['url']?>" placeholder = "Url" required />
                                </div>
                                <div class='form-group'>
                                    <label>Note:</label>
                                    <input type="text" class="form-control" name="note" value="<?php echo $data['inf']['notes']?>" placeholder = "Notes" />
                                </div>
                                <!--    <div class='form-group'>
                                    <input type="file" class="form-control" name="userfile"/>
                                  </div> -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Closed</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <!--  </div> -->

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="integrations" class="tab-pane fade">
            <h2>Edit Integrations</h2>

            <form action="" method="post" id="form">
                <input type="hidden" name="client_id" placeholder="client_id" id="client_id" value="<?=$_GET['id'] ?>">
                <input type="hidden" name="api_name" placeholder="api_name" id="api_name" value="api_analitics">
                <input type="hidden" name="api_profile_id" placeholder="api_profile_id" id="api_profile_id">
            </form>

            <ul class="integrations-list">
                <li class="google-analitics-logo">Google Analytics
                    <div class="loading_ajax" style="display: inline;">
                        <span  class="glyphicon glyphicon-refresh spinning"></span>
                    </div>
                    <span class="connect" id="connect-analytics">
                        <div class="loading_ajax" style="display: inline;">
                            <span  class="glyphicon glyphicon-refresh spinning"></span>
                        </div>
                        CONNECT
                    </span>
                    <span class="disconnect" id="disconnect-analytics">DISCONNECT</span>
                </li>

                <div class="analytics-connection-container">

                    <form action="" method="post" id="form">
                        <input type="hidden" name="client_id" placeholder="client_id" id="client_id" value="<?=$_GET['id'] ?>">
                        <input type="hidden" name="api_name" placeholder="api_name" id="api_name" value="api_analitics">
                    </form>

                    <script>
                        (function(w,d,s,g,js,fs){
                            g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
                            js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
                            js.src='https://apis.google.com/js/platform.js';
                            fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
                        }(window,document,'script'));
                    </script>

                    <div id="embed-api-auth-container"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div id="view-selector-container"></div>
                        </div>
                    </div>

                    <!-- Include the ViewSelector2 component script. -->
                    <script src="<?=__HOST__?>/js/embed-api/components/view-selector2.js"></script>

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

                            /*** Check if Analytics is connected*/
                            $.ajax({
                                type: "POST",
                                url: "/ajax/get_client_api_profile",
                                data: {val: $('#form').serialize() }
                            }).done(function( msg ) {
                                var data = $.parseJSON(msg);
                                console.log(data);

                                if(data !== null){
                                    /**
                                     * Create a new ViewSelector2 instance to be rendered inside of an
                                     * element with the id "view-selector-container".
                                     */
                                    var viewSelector = new gapi.analytics.ext.ViewSelector2({
                                        container: 'view-selector-container',
                                        ids: data.api_profile_id.replace("%3A", ":")
                                    })
                                        .execute();

                                    function second_passed() {
                                        console.log(viewSelector);
                                        $( "li.google-analitics-logo" ).append( $( '<span id="connected"><i>(Connected:<strong>"'+viewSelector.account.name+' - '+viewSelector.property.websiteUrl+'"</strong>)</i></span>' ) );
                                        $('.loading_ajax').css('display', 'none');
                                    }
                                    setTimeout(second_passed, 1000)

                                    $('#connect-analytics').text("RECONNECT").on('click', function(){
                                        $('.analytics-connection-container').show();

                                        viewSelector.on('change', function(ids) {
                                            console.log(ids);
                                            $("#api_profile_id").val(ids);

                                            $.ajax({
                                                type: "POST",
                                                url: "/ajax/add_api_profile",
                                                data: { val: $('#form').serialize() }
                                            }).done(function( msg ) {
                                                console.log(msg);
                                            });
                                        });
                                    });
                                }
                                else{

                                    var viewSelector = new gapi.analytics.ext.ViewSelector2({
                                        container: 'view-selector-container'
                                    })
                                        .execute();
                                    $('.loading_ajax').css('display', 'none');
                                    $('#connect-analytics').on('click', function(){
                                        $('.analytics-connection-container').show();

                                        viewSelector.on('change', function(ids) {
                                            console.log(ids);
                                            $("#api_profile_id").val(ids);

                                            $.ajax({
                                                type: "POST",
                                                url: "/ajax/add_api_profile",
                                                data: { val: $('#form').serialize() }
                                            }).done(function( msg ) {
                                                console.log(msg);
                                            });
                                        });
                                    });
                                };
                            });
                        });
                    </script>

                </div>

                <script>
                    $('#connect-analytics').on('click', function(){
                        $('.analytics-connection-container').show();
                        $('#connect-analytics').hide();
                        $('#connected').hide();
                        $('#disconnect-analytics').show();

                    });

                    $('#disconnect-analytics').on('click', function(){
                        $.ajax({
                            type: "POST",
                            url: "/ajax/remove_api_profile",
                            data: { val: $('#form').serialize() }
                        }).done(function( msg ) {
                            console.log(msg);
                            gapi.analytics.auth.signOut();
                            //$('.analytics-connection-container').hide();
                            $('#disconnect-analytics').hide();
                            $('#view-selector-container').hide();
                        });
                    });

                    $('#embed-api-auth-container').on('click', function(){
                        $('#view-selector-container').show();
                    });
                </script>

                <li class="google-console-logo">Google Search Console <span class="connect">CONNECT</span></li>
            </ul>



        </div>

    </div>

    <div class="clearfix"></div>

    <br />

</div>
</div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Jointoit! <!-- <a href="https://colorlib.com">Colorlib</a> -->
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
</body>