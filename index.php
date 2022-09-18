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
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
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

		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<?php
					$query = mysql_query("SELECT * FROM postproduct  ORDER BY ID ASC LIMIT 6");
					while ($row = mysql_fetch_array($query)) {
					?>
						<li style="background-image: url(images/<?php echo $row['avata'] ?>);">
							<div class="overlay-gradient"></div>
							<div class="container">
								<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<span class="price"><?php echo number_format($row['priceproduct']) ?> VNĐ</span>
											<h2><?php echo substr($row['titleproduct'], 0, 30) ?>...</h2>
											<p>Tình trạng: <?php echo $row['tinhtrang'] ?></p>
											<p><a href="single.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-outline btn-lg">Mua ngay</a></p>
										</div>
									</div>
								</div>
							</div>
						</li>
					<?php
					}
					?>
				</ul>
			</div>
		</aside>

		<div id="fh5co-services" class="fh5co-bg-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 text-center">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="icon-credit-card"></i>
							</span>
							<h3>Thanh toán dễ dàng</h3>
							<p>Hỗ trợ thanh toán bằng thể nội địa ATM hoặc chuyển khoản.</p>
							<p><a href="product.php" class="btn btn-primary btn-outline">Trải nghiệm ngay</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<h3>Hoàn tiền trong vòng 24h</h3>
							<p>Trong trường hợp sản phẩm lỗi, dịch vụ hoàn trả và đền bù 100%</p>
							<p><a href="product.php" class="btn btn-primary btn-outline">Trải nghiệm ngay</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="icon-paper-plane"></i>
							</span>
							<h3>Miễn phí vận chuyển</h3>
							<p>Đơn trên 30.000.000 VNĐ, cửa hàng sẽ miễn phí vận chuyển.</p>
							<p><a href="product.php" class="btn btn-primary btn-outline">Trải nghiệm ngay</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-product">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Vật dụng gia đình</span>
						<h2>Danh sách sản phẩm</h2>
					</div>
				</div>
				<div class="row">
					<?php
					$query = mysql_query("SELECT * FROM postproduct  ORDER BY ID DESC LIMIT 6");
					while ($row = mysql_fetch_array($query)) {
					?>
						<div class="col-md-4 text-center animate-box">
							<div class="product">
								<div class="product-grid" style="background-image:url(images/<?php echo $row['avata'] ?>);">
									<div class="inner">
										<p>
											<a href="single.php?id=<?php echo $row['id'] ?>" class="icon"><i class="icon-shopping-cart"></i></a>
										</p>
									</div>
								</div>
								<div class="desc">
									<h3><a href="single.php?id=<?php echo $row['id'] ?>"><?php echo substr($row['titleproduct'], 0, 30) ?>...</a></h3>
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


		<div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(images/img_bg_5.jpg);">
			<div class="container">
				<div class="row">
					<div class="display-t">
						<div class="display-tc">
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-eye"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Nguyên liệu chế tác</span>

								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-shopping-cart"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="450" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Khách hàng vui vẻ</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-shop"></i>
									</span>
									<span class="counter js-counter" data-from="0" data-to="700" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Sản phẩm</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-clock"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="5605" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Giờ đã sử dụng</span>

								</div>
							</div>
						</div>
					</div>
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
						if (isset($_POST['uploadEmail'])) {
							$email = $_POST['email'];
							$dateline = date('Y-m-d H:i:s');
							$insert = mysql_query("INSERT INTO thongbao(email,dateline)VALUES('$email','$dateline')") or die(mysql_errno());
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
									<input type="email" name="email" class="form-control" id="email" placeholder="Email">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<input type="submit" name="uploadEmail" class="btn btn-default btn-block" value="Đăng ký">
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
						<p>Shop House là một thương hiệu thuộc AKA Furniture, công ty hàng đầu về nội thất tại Việt Nam, là một thành viên của tập đoàn AA.</p>
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