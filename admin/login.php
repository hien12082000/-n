<?php 
    include('connect/connect.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop House Admin</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
			<?php
					$name ="admin";
					$pas = 123456;

					if (isset($_POST['submit'])){

					if ($name == $_POST['username'] && $pas == $_POST['password']) {

						header("location:index.php?admin=$name"); //đây là lệnh khai báo chuyển trang đối với form đăng nhập.

					} else {
						echo "<center><span style=color:red>Bạn vui lòng kiểm tra lại tài khoản !</span></center>";
						}
					}

				?>
				<div class="panel-heading">Đăng nhập hệ thống</div>
				<div class="panel-body">
					<form action="" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Tài khoản" name="username" type="text" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="password" type="password" required>
							</div>
							<input type="submit" name="submit" class="btn btn-primary" name="" value="Đăng nhập">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
