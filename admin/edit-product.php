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
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Shop House</span> Admin</a>

			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="post-product.php">Thêm sản phẩm</a></li>
			<li><a href="view-product.php">Danh sách sản phẩm</a></li>
			<li><a href="view-order.php">Quản lý hóa đơn</a></li>
			<li><a href="view-phanhoi.php">Quản lý phản hồi</a></li>
			<li><a href="view-dangkytin.php">Quản lý thông báo</a></li>
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
		</ul>
	</div>
	<!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Chỉnh sửa sản phẩm</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="card">
						<div class="card-header">
							<?php
							if(isset($_GET['id']) && $id = $_GET['id']){
							$user = mysql_query("SELECT * FROM postproduct WHERE id=$id");
							if(mysql_num_rows($user)>0){
								$array = mysql_fetch_array($user);
											}
							if(isset($_POST['upload'])){
								$titleproduct = $_POST['titleproduct'];
								$priceproduct = $_POST['priceproduct'];
								$thuonghieu = $_POST['thuonghieu'];
								$tinhtrang = $_POST['tinhtrang'];
								@$avata = $_FILES['avata']['name'];
								@move_uploaded_file($avata_tmp , 'img/'.$avata);
								$moto = $_POST['moto'];
								$dateline = date('Y-m-d H:i:s');
								$insert = mysql_query("UPDATE postproduct SET titleproduct='$titleproduct',priceproduct='$priceproduct',thuonghieu='$thuonghieu',tinhtrang='$tinhtrang',avata='$avata',moto='$moto' WHERE id='$id'");
								if (isset($insert)) {
									echo "Sửa sản phẩm thành công!";
								}else{
									echo "Sửa sản phẩm thất bại!";
								}
									}
								}
							?>
						</div>
						<div class="card-block">
							<form action="edit-product.php?id=<?php echo $array['id'] ?>" method="post"
								enctype="multipart/form-data" >
								<div class="card-body">
									<h5 class="mt-2">Sửa sản phẩm</h5>
									<fieldset class="form-group">
										<input type="text" value="<?php echo $array['titleproduct'] ?>"
											name="titleproduct" class="form-control" placeholder="">
									</fieldset>
									<h5 class="mt-2">Giá sản phẩm</h5>
									<fieldset class="form-group">
										<input type="text" value="<?php echo $array['priceproduct'] ?>"
											name="priceproduct" class="form-control" placeholder="">
									</fieldset>
									<h5 class="mt-2">Thương hiệu sản phẩm</h5>
									<fieldset class="form-group">
										<input type="text" value="<?php echo $array['thuonghieu'] ?>" name="thuonghieu"
											class="form-control" placeholder="">
									</fieldset>
									<h5 class="mt-2">Tình trạng sản phẩm</h5>
									<fieldset class="form-group">
										<input type="text" value="<?php echo $array['tinhtrang'] ?>" name="tinhtrang"
											class="form-control" placeholder="">
									</fieldset>
									<h5 class="mt-2">Hình ảnh sản phẩm</h5>
									<fieldset class="form-group">
										<input type="file" value="" name="avata" class="form-control" placeholder="">
									</fieldset>
									<h5 class="mt-2">Mô tả sản phẩm</h5>
									<fieldset class="form-group">
										<textarea name="moto" class="form-control" id="txtDescription"
											rows="3"><?php echo $array['moto'] ?></textarea>
									</fieldset>
									<input type="submit" name="upload" value="Sửa sản phẩm">
								</div>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
				<!--/.col-->
			</div>
			<!--/.row-->
		</div>
		<!--/.main-->


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/custom.js"></script>
		<script src="ckeditor/ckeditor.js"></script>
		<script>
			CKEDITOR.replace('txtDescription', {});
		</script>

</body>

</html>