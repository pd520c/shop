<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>商城后台登陆</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>/ui/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>/ui/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>/ui/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
</head>
<body  class="hold-transition login-page">
	<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">请输入你的信息</p>

    <form action="/index.php/admin/login/auth" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name = "username" placeholder="用户名">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name = "password" placeholder="密码">
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">LOGIN</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
    <script src="<?php echo base_url(); ?>/ui/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>/ui/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>/ui/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>/ui/js/layer/layer.js"></script>

</body>
</html>