<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>WhiteBoard project | </title>
  <?php
  $host = 'http://' . $_SERVER['HTTP_HOST']; // для правильной подгрузки стилей и скриптов
  ?>
  <link href="<?php echo $host; ?>/assets/css/custom.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<?php include 'app/views/'.$content_view; ?>

<div class="modal fade" id="client"  tabindex="-1" role="dialog" aria-labelledby="editCampaign">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Add new client: </h4>
      </div>
      <style type="text/css">
        .erroremail{
          color: #ce0a0a;
        }
      </style>

      <form id="editClientForm" enctype="multipart/form-data" action="<?php echo $host . "/agency/"; ?>addclients" method="post">
        <div class="modal-body">
          <div class="erroremail"></div>
          <div class='form-group'>
            <label> Name: </label>
            <input type="text" class="form-control" name="name" placeholder = "Name" required />
          </div>
          <div class='form-group'>
            <label> Email: </label>
            <input type="email" class="form-control" name="email" id="emailcheck" placeholder = "Email" required />
          </div>
          <div class='form-group'>
            <label> Password: </label>
            <input type="password" class="form-control" name="password" placeholder = "Password" required />
          </div>
          <div class='form-group'>
            <label> Address: </label>
            <input type="text" class="form-control" name="address" placeholder = "Address" required />
          </div>
          <div class='form-group'>
            <label> Phone: </label>
            <input type="text" class="form-control" name="phone" placeholder = "Phone" required />
          </div>
          <div class='form-group'>
            <label> URL: </label>
            <input type="text" class="form-control" name="url" placeholder = "Url" required />
          </div>
          <div class='form-group'>
            <label> Notes: </label>
            <input type="text" class="form-control" name="note" placeholder = "Notes" />
          </div>
          <div class='form-group'>
            <label> Image: </label>
            <input type="file" class="form-control" name="userfile"/>
          </div>
          <div class="modal-footer">
            <button type="button" id="closereload" class="btn btn-default" data-dismiss="modal" onclick="window.location.reload(true)">Close</button>
            <button type="submit" id="savecheck" class="btn btn-primary">Save</button>
            <div class="bg-success success"></div>
          </div>
        </div>
        <!-- </div> -->

      </form>
    </div>
  </div>
</div>

<!-- Javascripts -->
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<!-- Flot -->
<script type="text/javascript">
  //var email=document.getElementById('emailcheck').value;

  $(document).ready(function(){
    var count = 0;
    var $form = $('#editClientForm');
    $form.submit(function(e){
      e.preventDefault();
      var email = $('#emailcheck').val();
      $.ajax({
        type: "POST",
        url: '<?php echo $host . "/agency/"; ?>checkemail',
        data:  { email:email},
        success: function (data) {
          if(data === 'Sorry, but the email is not available'){
            document.querySelector('.erroremail').innerHTML = '<p>' + data + '</p>';
          } else if( data === 'Success') {
            if(count == 0){
              $form.ajaxSubmit({
                type: "POST",
                url: '<?php echo $host . "/agency/"; ?>addclients',
                // data:  $form.serialize(),
                success: function (data) {
                  // console.log(data);
                  document.querySelector('.erroremail').innerHTML = '<p>' + data + '</p>';
                  $('.erroremail').css({color:'#06a506', });
                  setTimeout(function(){
                    $('.erroremail').fadeOut(1000);
                  }, 3500);
                }
              });
              // $form.submit();
              count++;
            }
          }
        }
      });

    });

    $('#closereload')



  });

</script>
<script src="<?=__HOST__?>/js/embed-api/components/date-range-selector.js"></script>
</body>
</html>

