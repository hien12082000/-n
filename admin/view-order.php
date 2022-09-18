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
				<h1 class="page-header">Danh sách hóa đơn</h1>
			</div>
		</div>
		<!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<div class="card">
							<div class="card-content collapse show">
								<div class="card-body">
									<div class="table-responsive">
									<table class="table">
											<thead>
												<tr>
													<th>#</th>
													<th>Tên sản phẩm</th>
													<th>Họ và tên</th>
													<th>Số điện thoại</th>
													<th>số lượng</th>
													<th>Chức năng</th>
												</tr>
											</thead>
											<tbody>
												<?php					
                                                    $query = mysql_query("SELECT * FROM userorder  ORDER BY ID DESC");
                                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
												<tr>
													<th scope="row"><?php echo $row['id'] ?></th>
													<td><?php echo $row['titleproduct'] ?></td>
													<td><?php echo $row['userorder'] ?></td>
													<td><?php echo $row['phonenumber'] ?></td>
													<td><?php echo $row['soluong'] ?></td>
													<td><a href="detail-hoadon.php?id=<?php echo $row['id'] ?>">Xem</a> - <a href="delete-user-order.php?id=<?php echo $row['id'] ?>">Xóa</a></td>
												</tr>
												<?php 
															}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
				</div><!-- /.panel-->
			</div><!-- /.panel-->
		</div><!-- /.col-->
	</div><!-- /.row -->
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

</body>

</html>