<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" size="16x16" href="<?php echo base_url(); ?>assets/img/cp.png">
    <title><?php echo $title ; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <!-- AJAX JS -->
      <!--JQuery-->
      <script src="<?php echo base_url(); ?>assets/plugins/jquery-3.1.1.min.js" type="text/javascript"></script>
      <script>
          var base_url = '<?php echo base_url();?>';
      </script>
      <script src="<?php echo base_url(); ?>assets/js_ajax/dpanel.js" type="text/javascript"></script>
      <!-- End AJAX JS

    <!--Sweet Alert-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sweet_alert/sweetalert.css">
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/sweet_alert/sweetalert.min.js"></script>


  </head>
  <style>
      .login-page{
          background-image: url("<?php echo base_url(); ?>assets/images/img/login.jpg");
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          
      }
      .login-logo{
          width: 460px;
      }
      .login-logo a{
          width: 460px;
          margin-left: -80px;
      }
  </style>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Sistem Informasi Perusahaan</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <h4>Login</h4>

          <font style='color: red;'><?php if($gagal_login){echo $gagal_login;} ?></font>
        <hr>


          <form action="<?php echo base_url(); ?>dpanel/act_login" name="login_form" method="post" >
          <div class="form-group has-feedback">

            <input type="text" name="username" class="form-control" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
              <?php echo form_error('username');?>
          </div>

          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              <?php echo form_error('password');?>
          </div>
          

          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

       </br>
       
       <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

 <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
