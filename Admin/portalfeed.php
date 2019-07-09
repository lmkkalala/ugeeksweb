<?php 
  $status=$_GET['status'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>U-Geeks | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>U-</b>Geeks
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <?php
      if($status=="success"){
     ?><p class="login-box-msg" style="color: green;">You are now signed up</p>
    <?php } else if($status=="exist"){
    ?><p class="login-box-msg" style="color: black;">User already signed in</p>
    <?php } else if($status=="failed"){
    ?><p class="login-box-msg" style="color: red;">We're experiencing a connection problem, try again later</p><?php } else if($status=="noAccountFound"){
    ?><p class="login-box-msg" style="color: red;">No Account was found with provided information</p><?php }?>
    <form action="" method="p
    <form action="" method="post">
      <div class="row">
        
        <!-- /.col -->
        <?php
      if($status=="success"){
        ?><center><div class="" style="margin-left: 10%; margin-right: 10%;">
         <a href="index.php" class="btn btn-primary btn-block btn-flat">Sign In</a>
        </div></center>
       <?php } else if($status=="exist"){
        ?><center><div class="" style="margin-left: 10%; margin-right: 10%;">
         <a href="index.php" class="btn btn-primary btn-block btn-flat">Sign In</a>
        </div></center>
      <?php } else if($status=="failed"){
        ?><center><div class="" style="margin-left: 10%; margin-right: 10%;">
         <a href="signup.php" class="btn btn-primary btn-block btn-flat">Sign Up</a>
        </div></center><?php } else if($status=="noAccountFound"){
        ?><center><div class="" style="margin-left: 10%; margin-right: 10%;">
          <small>Sign up for free</small>
         <a href="signup.php" class="btn btn-primary btn-block btn-flat">Sign Up</a>
        </div></center><?php }?>

        <!-- /.col -->
      </div>
    </form>

    

    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>

</body>
</html>
