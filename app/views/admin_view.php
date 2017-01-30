<style type="text/css">
.right_col{
  margin-left: 0px!important;
}
footer{
  margin-left: 0px!important;
}
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
</style>
<body class="nav-md">
    <div class="container body">
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <!-- <img src="<?php echo($host.'/'.$data['prof']['imglogo']); ?>" alt=""><?php echo($data['prof']['name_agency']); ?> -->
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="/index/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
<div class="right_col" role="main">
    <h1>Admin Panel</h1>

<form id="adminform" enctype="multipart/form-data" action="<?php echo $host . "/admin/"; ?>upload" method="post">
     <div class='form-group'>
                <input type="file" class="form-control" name="userfile"/>
      </div>
      <div class='form-group'>
            <textarea rows="10" cols="45" class="form-control" placeholder="You text" type="text" name="text"></textarea>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Closed</button> -->
        <button type="submit" class="btn btn-primary">Save</button>
      </div>


</form>
</div>
          <br />
    </div>
<footer>
  <div class="pull-right">
    Simon project! <!-- <a href="https://colorlib.com">Colorlib</a> -->
  </div>
  <div class="clearfix"></div>
</footer>
 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 <script>tinymce.init({ selector:'textarea' });</script>
        
   