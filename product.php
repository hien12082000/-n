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

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
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
							<a href="product.php">S???n ph???m</a>
						</li>
						<li><a href="about.php">Gi???i thi???u</a></li>
						<li><a href="contact.php">Li??n h???</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Danh s??ch s???n ph???m</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>V???t d???ng gia ????nh</span>
					<h2>Danh s??ch s???n ph???m</h2>
				</div>
			</div>
			<div class="row">
				<?php					
                     $query = mysql_query("SELECT * FROM postproduct  ORDER BY ID DESC");
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
							<h3><a href="single.php?id=<?php echo $row['id'] ?>"><?php echo substr($row['titleproduct'],0,30) ?>...</a></h3>
							<span class="price"><?php echo number_format($row['priceproduct']) ?> VN??</span>
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
					<h2>????ng k?? nh???n th??ng b??o</h2>
					<p>Ch??? c???n theo d??i S???n ph???m m???i nh???t c???a ch??ng t??i. B??y gi??? b???n c?? th??? ????ng k??</p>
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
							echo "????ng k?? nh???n th??ng b??o th??nh c??ng!";
								}else{
							echo "????ng k?? nh???n th??ng b??o th???t b???i!";
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
							<input type="submit" name="uploadEmail" class="btn btn-default btn-block" value="????ng k??">
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
					<p>Shop House l?? m???t th????ng hi???u thu???c AKA Furniture, c??ng ty h??ng ?????u v??? n???i th???t t???i Vi???t Nam, l?? m???t th??nh vi??n c???a t???p ??o??n AA.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="about.php">Gi???i thi???u</a></li>
						<li><a href="contact.php">Li??n h???</a></li>
						<li><a href="product.php">S???n ph???m</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
					<li> <a href="shop.php"> Mua s???m </a> </li>
					<li> <a href="#"> Quy???n ri??ng t?? </a> </li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
					<li> <a href="#"> T??m nh?? thi???t k??? </a> </li>
					<li> <a href="#"> T??m nh?? ph??t tri???n </a> </li>
					<li> <a href="#"> Nh??m </a> </li>
					<li> <a href="#"> Qu???ng c??o </a> </li>
					<li> <a href="#"> API </a> </li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2022. All Rights Reserved.</small> 
						<small class="block">Designed by Ng???c Hi???n</small>
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

