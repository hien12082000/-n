<?php 
    include('admin/connect/connect.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shop House</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords"
		content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>



	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-xs-2">
						<div id="fh5co-logo"><a href="index.php">Shop House</a></div>
					</div>
					<div class="col-md-5 col-xs-6 text-center menu-1">
						<ul>
							<li class="has-dropdown">
								<a href="product.php">Sản phẩm</a>
							</li>
							<li><a href="about.php">Giới thiệu</a></li>
							<li><a href="contact.php">Liên hẹ</a></li>
						</ul>
					</div>
				</div>

			</div>
		</nav>

		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
			style="background-image:url(images/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Chi tiết sản phẩm</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


		<div id="fh5co-product">
		<div class="container">
			<?php
					if(isset($_POST['uploadorder'])){
						$titleproduct = $_POST['titleproduct'];
						$userorder = $_POST['userorder'];
						$phonenumber = $_POST['phonenumber'];
						$email = $_POST['email'];
						$diachi = $_POST['diachi'];
						$soluong = $_POST['soluong'];
						$loinhan = $_POST['loinhan'];
						$dateline = date('Y-m-d H:i:s');
							$insert = mysql_query("INSERT INTO userorder(titleproduct,userorder,phonenumber,email,diachi,soluong,loinhan,dateline)VALUES('$titleproduct','$userorder','$phonenumber','$email','$diachi','$soluong','$loinhan','$dateline')")or die(mysql_errno());
				if (isset($insert)) {
					// echo "Đặt hàng thành công !";
					echo '<script>alert("Đặt hàng thành công !")</script>';
				} else {
					// echo "Đặt hàng thất bại !";
					echo '<script>alert("Đặt hàng thất bại !")</script>';
				}
							}
				?>
			<?php
				if(isset($_GET['id']) && $id = $_GET['id']){
						$query = mysql_query("SELECT * FROM postproduct WHERE $id=id");
				while 	($row = mysql_fetch_array($query)) {
				?>
			<div class="row">
				<div class="col-lg-6">
					<img src="images/<?php echo $row['avata'] ?>" alt="" style="width:100%">
				</div>
				<div class="col-lg-6">
					<span class="price" style="color:red"><?php echo number_format($row['priceproduct']) ?>
						VNĐ</span>
					<h2><?php echo $row['titleproduct'] ?></h2>
					<p>Thương hiệu: <?php echo $row['thuonghieu'] ?></p>
					<span class="price" style="color:green"><?php echo $row['tinhtrang'] ?></span>
					<p><?php echo $row['moto'] ?></p>

					<div class="row">
						<div class="col-md-12">
							<form action="" method="POST" role="form">
								<legend>THÔNG TIN CÁ NHÂN</legend>

								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control"
											value="<?php echo $row['titleproduct'] ?>" name="titleproduct"
											placeholder="Tên sản phẩm" required style="display:none">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" name="userorder" placeholder="Họ và tên"
											required>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" name="phonenumber"
											placeholder="Số điện thoại" required>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" name="email" placeholder="Email"
											required>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" name="diachi"
											placeholder="Địa chỉ nhận hàng" required>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<input type="text" class="form-control" name="soluong" placeholder="Số lượng"
											required>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<textarea name="loinhan" class="form-control" id="" cols="30" rows="10"
											placeholder="Nội dung"></textarea>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<input type="submit" name="uploadorder" value="ĐẶT HÀNG" class="btn btn-primary"
										style="width:100%">
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<?php 
						}
					}
				?>
		</div>

			<div id="fh5co-product">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<span>Hãy tham khảo</span>
							<h2>Sản phẩm liên quan</h2>
						</div>
					</div>
					<div class="row">
						<?php					
                     $query = mysql_query("SELECT * FROM postproduct  ORDER BY ID DESC LIMIT 3");
                        while ($row = mysql_fetch_array($query)) {
                ?>
						<div class="col-md-4 text-center animate-box">
							<div class="product">
								<div class="product-grid"
									style="background-image:url(images/<?php echo $row['avata'] ?>);">
									<div class="inner">
										<p>
											<a href="single.php?id=<?php echo $row['id'] ?>" class="icon"><i class="icon-shopping-cart"></i></a>
										</p>
									</div>
								</div>
								<div class="desc">
									<h3><a
											href="single.php?id=<?php echo $row['id'] ?>"><?php echo substr($row['titleproduct'],0,30) ?>...</a>
									</h3>
									<span class="price"><?php echo number_format($row['priceproduct']) ?> VNĐ</span>
								</div>
							</div>
						</div>
						<?php 
						}
				?>
					</div>
				</div>
			</div>

			<div id="fh5co-started">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Đăng ký nhận thông báo</h2>
							<p>Chỉ cần theo dõi Sản phẩm mới nhất của chúng tôi. Bây giờ bạn có thể đăng ký</p>
						</div>
					</div>
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2">
							<?php
					if(isset($_POST['uploadEmail'])){
					$email = $_POST['email'];
					$dateline = date('Y-m-d H:i:s');
					$insert = mysql_query("INSERT INTO thongbao(email,dateline)VALUES('$email','$dateline')")or die(mysql_errno());
								if (isset($insert)) {
									// echo "Đăng kí nhận thông báo thành công!";
									echo '<script>alert("Đăng kí nhận thông báo thành công!")</script>';
								} else {
									// echo "Đăng kí nhận thông báo thất bại!";
									echo '<script>alert("Đăng kí nhận thông báo thất bại!")</script>';
								}
						}
						?>
							<form class="form-inline" action="" method="post">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="email" class="sr-only">Email</label>
										<input type="email" name="email" class="form-control" id="email"
											placeholder="Email">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<input type="submit" name="uploadEmail" class="btn btn-default btn-block"
										value="Đăng ký">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<footer id="fh5co-footer" role="contentinfo">
				<div class="container">
					<div class="row row-pb-md">
						<div class="col-md-4 fh5co-widget">
							<h3>Shop House</h3>
							<p>Shop House là một thương hiệu thuộc AKA Furniture, công ty hàng đầu về nội thất tại Việt
								Nam, là một thành viên của tập đoàn AA.</p>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
							<ul class="fh5co-footer-links">
								<li><a href="about.php">Giới thiệu</a></li>
								<li><a href="contact.php">Liên hệ</a></li>
								<li><a href="product.php">Sản phẩm</a></li>
							</ul>
						</div>

						<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
							<ul class="fh5co-footer-links">
								<li> <a href="shop.php"> Mua sắm </a> </li>
								<li> <a href="#"> Quyền riêng tư </a> </li>
							</ul>
						</div>

						<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
							<ul class="fh5co-footer-links">
								<li> <a href="#"> Tìm nhà thiết kế </a> </li>
								<li> <a href="#"> Tìm nhà phát triển </a> </li>
								<li> <a href="#"> Nhóm </a> </li>
								<li> <a href="#"> Quảng cáo </a> </li>
								<li> <a href="#"> API </a> </li>
							</ul>
						</div>
					</div>

					<div class="row copyright">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">&copy; 2022. All Rights Reserved.</small>
								<small class="block">Designed by Ngọc Hiền</small>
							</p>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
							</p>
						</div>
					</div>

				</div>
			</footer>
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>

		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- Flexslider -->
		<script src="js/jquery.flexslider-min.js"></script>
		<!-- Main -->
		<script src="js/main.js"></script>

</body>

</html>