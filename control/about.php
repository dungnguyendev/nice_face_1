<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />
	<title>Giới thiệu - Nice face</title>

	<link rel="stylesheet" href="../owlcarousel/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="../owlcarousel/assets/owl.theme.default.css" />
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="../owlcarousel/owl.carousel.min.js"></script>
</head>

<body>
	<style>
		:root {
			--color: #858080;
			--color_icon: #000;
			--with_chung: 1200px;
		}

		body {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: Arial, Helvetica, Verdana, sans-serif;
		}

		a {
			text-decoration: none;
		}

		.nav {
			width: 100%;
			position: fixed;
			background: #fff;
			z-index: 1000;
		}

		.box_menu {

			max-width: 1200px;
			margin: 0 auto;

			display: flex;
			flex-direction: row;
			justify-content: space-between;
			flex-wrap: wrap;
			align-items: center;
			align-content: center;

		}

		.logo_shop img {
			max-width: 200px;
			height: 60px;
		}

		.menu_cha {
			position: relative;
			padding: 0;
			display: flex;
			list-style: none;
			justify-content: center;


		}

		.menu_cha li {
			padding: 24px;
		}

		.menu_cha li a {
			color: var(--color);
			transition: 0.5s ease;
		}

		.menu_cha li a:hover {
			color: rgb(56, 55, 55);
		}

		.menu_con {
			z-index: 100;
			position: absolute;
			list-style: none;
			padding: 5px;
			visibility: hidden;
			opacity: 0;
			transition: all 0.4s ease-in;
		}

		.fa-angle-left {
			margin-left: 10px;
			transform: rotate(-90deg);
		}

		.menu_con li {
			padding: 5px;
		}

		.menu_cha li:hover ul {
			margin-top: 15px;
			border-radius: 5px;
			background: rgb(218, 215, 215);
			visibility: visible;
			opacity: 1;
		}

		.box_icon {
			display: flex;
		}

		.icon_1 {
			padding: 20px;
		}

		.icon_1 i {
			color: var(--color_icon);
		}

		/* Banner */
		.box_banner {
			z-index: -1;
			position: relative;
			height: 315px;
			max-width: 1920px;
			padding-top: 97.6px;
			margin: 0 auto;
			overflow: hidden;
		}

		.banner_1 {
			width: 100%;
			z-index: 10;
			position: absolute;
		}

		.banner {
			position: absolute;
			background-color: #33455c;
			width: 1920px;
			z-index: 30;
			height: 315px;
			opacity: 0.6;
			margin: 0 auto;
		}

		.banner_3 {
			max-width: 1200px;
			height: 315px;
			display: flex;
			align-items: center;
			align-content: center;
			margin: 0 auto;
		}

		.banner_3 p {
			z-index: 200;
			color: #fff;
			font-size: 37px;

			position: absolute;
		}

		.ground_banner p {
			margin-top: -100px;
		}

		.box_banner img {
			object-fit: cover;
			height: 315px;
			width: 100%;
		}

		/* title */
		.title_fist {
			max-width: 1200px;
			margin: 0 auto;
		}

		.title_fist ul {
			display: flex;
			padding: 0;
			list-style: none;
			display: flex;
		}

		.title_fist ul li {
			display: flex;
		}

		.title_fist ul li a {
			color: var(--color);
			align-items: center;
			align-content: center;
			display: flex;
		}

		.title_fist ul li a p {
			margin-right: 10px;
			margin-left: 10px;
		}

		/* Main */
		.box_about_us {
			max-width: 1200px;
			height: 770px;
			margin: 0 auto;
			padding-top: 50px;
		}

		.about_us {
			display: flex;
			justify-content: center;
			text-align: center;
			position: relative;
		}

		.image_1 {
			width: 1068px;

			position: absolute;
		}

		.image_1 img {
			width: 100%;
			height: 379px;
			object-fit: cover;
			border-radius: 6px;
		}

		.box_reviews {
			position: absolute;
			width: 620px;
			background: #e3f5f5;
			height: 349px;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			border-radius: 0px 0px 12px 12px;
			top: 300px;
			padding-left: 70px;
			padding-right: 70px;
			padding-bottom: 70px;
			padding-top: 20px;
		}

		.box_reviews h2 {
			font-size: 30px;
		}

		.box_reviews p {
			text-align: left;
			letter-spacing: 1px;
			font-size: 18px;
			font-weight: 400;
			line-height: 31px;
			color: var(--color);
		}

		.box_image {
			max-width: 1200px;
			height: 400px;
			padding-top: 50px;
			padding-bottom: 50px;
			margin: 0 auto;
		}

		.list_product {
			height: 400px;
			position: relative;
			display: flex;
			flex-wrap: wrap;
			--colunm_Sp: 4;
			--spacing: 20px;
			z-index: -1;
		}

		.box-element-sanpham {
			overflow: hidden;

			padding-left: var(--spacing);
			padding-bottom: var(--spacing);
			width: calc(calc(100% / var(--colunm_Sp)) - var(--spacing));
			position: relative;
		}

		.pictures {
			position: absolute;
			z-index: 10;
		}

		.pictures img {
			border-radius: 10px;
			object-fit: cover;
			width: 100%;
			height: 318px;
			transition: 0.5s ease;
		}

		.title-sanpham {
			display: flex;
			align-items: center;

			text-align: center;
			width: 200px;
			height: 30px;
			position: absolute;
			top: 285px;
			left: 49px;
			padding: 10px;
			z-index: 400;
			background: #e3f5f5;
			border-radius: 0px 0px 12px 12px;
		}

		.title-sanpham p {
			font-size: 16px;

			z-index: 340;
			width: 100%;
			color: var(--color);
		}

		.pictures img:hover {
			opacity: 0.8;
		}

		.box_banner_visit {
			max-width: 1920px;
			margin: 0 auto;
			background: #272343;
		}

		.banner_visit {
			max-width: 1200px;
			margin: 0 auto;
			display: flex;
			justify-content: center;
			align-content: center;
			text-align: center;
			color: #ffffff;
			padding: 40px;
		}

		.van_chuyen {
			width: 30%;
			margin-right: 30px;
			margin-left: 30px;
		}

		.van_chuyen p {
			letter-spacing: 1px;
			color: #ffffff;
		}

		.van_chuyen i {
			font-size: 30px;
		}

		.title_van_chuen {
			font-size: 25px;
		}

		.box_doi_ngu {
			padding-top: 50px;
			max-width: 1200px;
			margin: 0 auto;
		}

		.box_title_doi_ngu {
			text-align: center;
		}

		.box_title_doi_ngu h2 {
			font-size: 30px;
		}

		.box_title_doi_ngu p {
			font-size: 18px;
			color: var(--color);
		}

		.doi_ngu {
			justify-content: space-between;
			display: flex;
		}

		.form_user {
			width: 22%;
		}

		.doi_ngu img {
			width: 100%;
			height: 300px;
			border-radius: 10px;
		}

		.name_user {
			font-size: 18px;
			font-weight: 600;
		}

		#intro-owl {
			padding-top: 30.6px;
			padding-bottom: 50px;
			z-index: -1;
			height: 335px;
			max-width: 800px;
			margin: 0 auto;
			overflow: hidden;
		}

		.owl-theme img {
			height: 315px;
		}

		.box_comment {
			text-align: center;
			border: 1px solid var(--color);
			border-radius: 10px;
			margin: 10px;
			padding: 10px;
		}

		.box_comment img {
			margin: 0 auto;
			width: 100px !important;
			height: 100px;
			border-radius: 50px;
		}

		.owl-dots .active span {
			background: orange !important;
		}

		/* Footer */
		.box_footer {
			background: rgba(39, 35, 67, 1);
			max-width: 1920px;
			color: rgb(236, 235, 235);
			margin: 0 auto;
		}

		.footer {
			max-width: 1200px;
			margin: 0 auto;
			padding-top: 30px;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.footer h3 {
			font-size: 20px;
			font-weight: 400;
		}

		.box_footer_1 img {
			width: 200px;
			height: 80px;
		}

		.box_footer_1 span {
			color: rgb(205, 199, 199);
			font-size: 15px;
		}

		.icon-footer ul {
			padding: 0;
			display: flex;
			list-style: none;
		}

		.icon-footer ul li {
			padding-right: 18px;
		}

		.icon-footer ul li a i {
			color: rgb(236, 235, 235);
			transform: scale(1.3);
		}

		.icon-footer ul li a i:hover {
			transform: scale(1.45);
		}

		.box_footer_2,
		.box_footer_3,
		.box_footer_4 {
			display: flex;
			flex-direction: column;
		}

		.box_footer_2 ul,
		.box_footer_3 ul,
		.box_footer_4 ul {
			list-style: none;
			padding: 0;
		}

		.box_footer_2 ul li,
		.box_footer_3 ul li,
		.box_footer_4 ul li {
			padding-bottom: 8px;
		}

		.box_footer_2 ul a,
		.box_footer_3 ul a,
		.box_footer_4 ul a {
			font-size: 15px;
			color: rgb(205, 199, 199);
		}

		.element_0123 ul li a {
			position: relative;
			padding-bottom: 2px;
			font-size: 13px;
		}

		.element_0123 ul li a::before {
			content: '';
			position: absolute;
			display: block;
			background: #858080;
			height: 1px;
			width: 100%;
			left: 0;
			bottom: 0;
			transform-origin: top left;
			transition: transform 0.4s ease;
			transform: scaleX(0);
		}

		.element_0123 ul li a:hover::before {
			transform: scaleX(1);
		}
	</style>
	<!-- Menu -->
	<div class="box_shop">
		<?php require_once("../view/menu.php") ?>
	</div>
	<!-- Banner -->
	<div class="box_banner">
		<div class="banner_1">
			<img src="../banner dự án1/banner6.jpg" alt="" />
		</div>
		<div class="banner"></div>
		<div class="banner_3">
			<p>Giới thiệu về Nice Face</p>
		</div>
	</div>

	<div class="title_fist">
		<ul>
			<li>
				<a href="../index.html">Trang chủ
					<p>/</p>
				</a>
			</li>
			<li><a href="../about_us.html">Giới thiệu</a></li>
		</ul>
	</div>
	
	<div class="box_about_us">
		<div class="about_us">
			<div class="image_1">
				<img src="../image/z3856255405467_f625eb57ad605dd0fd081cc099e8ef2d.jpg" alt="hinh 1" />
			</div>
			<div class="box_reviews">
				<h2>Xin chào, Chúng tôi là Nice Face</h2>
				<p>
					Đến với Nice Face bạn sẽ cảm nhận được sự nhiệt tình và đầy sự
					tinh tế bởi chúng tôi.
				</p>
				<p>
					Nice Face mong muốn sẽ giúp bạn thực sự hiểu được làn da của mình,
					cảm nhận được những thay đổi và biến chuyển của làn da theo thời
					gian. Từ đó, Nice Face sẽ gợi ý cho bạn những quy trình dưỡng da
					phù hợp cũng như sử dụng những sản phẩm một cách hiệu quả nhất.
				</p>
				<p>
					Hãy ghé cửa hàng ngay và chọn cho mình một phong cách riêng mà
					ship mang lại cho các bạn nhé !!.
				</p>
			</div>
		</div>
	</div>
	<div class="box_image">
		<div class="list_product">
			<div class="box-element-sanpham">
				<div class="pictures">
					<a href="#">
						<img src="../banner dự án1/sp2.jpg" alt="" />
					</a>
				</div>
				<div class="title-sanpham">
					<p>Dưỡng da</p>
				</div>
			</div>
			<div class="box-element-sanpham">
				<div class="pictures">
					<a href="#"><img src="../banner dự án1/sp23.webp" alt="" /></a>
				</div>
				<div class="title-sanpham">
					<p>Trang điểm</p>
				</div>
			</div>
			<div class="box-element-sanpham">
				<div class="pictures">
					<a href="#"><img src="../banner dự án1/sp3.jpg" alt="" /></a>
				</div>
				<div class="title-sanpham">
					<p>Chức năng</p>
				</div>
			</div>
			<div class="box-element-sanpham">
				<div class="pictures">
					<a href="#">
						<img src="../banner dự án1/sp4.jpg" alt="" />
					</a>
				</div>
				<div class="title-sanpham">
					<p>Mặt nạ</p>
				</div>
			</div>
		</div>
	</div>
	<style></style>
	<div class="box_banner_visit">
		<div class="banner_visit">
			<div class="van_chuyen">
				<i class="fa-solid fa-house-user"></i>
				<p class="title_van_chuen">Của hàng</p>
				<p>
					Cửa hàng Nice Face luôn luôn chào đón quý khách. Nơi đây có nhiều
					ưu đãi đặc biệt cũng như những dịch vụ hỗ trợ của nhân viên rất
					tận tình.
				</p>
			</div>
			<div class="van_chuyen">
				<i class="fa-solid fa-headphones"></i>
				<p class="title_van_chuen">Hỗ trợ 24/7</p>
				<p>
					Tất cả những thắc mắc, khó khăn mà quý khách gặp phải trong quá
					trình sử dụng dịch vụ của chúng tôi.Chúng tôi sẽ nỗ lực hết mình
					để đáp ứng nhu cầu của khách hàng trong khoảng thời gian nhanh
					nhất.
				</p>
			</div>
			<div class="van_chuyen">
				<i class="fa-solid fa-car-side"></i>
				<p class="title_van_chuen">Vận chuyển</p>
				<p>
					Giao hàng miễn phí trong nội thành từ đơn hàng 300.000 đ. Đối với
					những khách hàng ở ngoại thành sẽ nhận được đơn hàng trong vòng 7
					ngày.
				</p>
			</div>
		</div>
	</div>
	<div class="box_doi_ngu">
		<div class="box_title_doi_ngu">
			<h2>Đội ngũ của chúng tôi</h2>
			<p>
				Đội ngũ lãnh đạo trẻ, năng động và cầu thị là nền tảng <br />
				để chúng tôi phục vụ khách hàng
			</p>
		</div>
		<div class="doi_ngu">
			<div class="form_user">
				<img src="../banner dự án1/sp4.jpg" alt="" />
				<p class="name_user">Nguyễn Duy Hải</p>
				<p>Lập trình viên</p>
			</div>
			<div class="form_user">
				<img src="../banner dự án1/sp4.jpg" alt="" />
				<p class="name_user">Nguyễn Tiến Dũng</p>
				<p>Lập trình viên</p>
			</div>
			<div class="form_user">
				<img src="../banner dự án1/sp4.jpg" alt="" />
				<p class="name_user">Trần Hà Nga</p>
				<p>Lập trình viên</p>
			</div>
			<div class="form_user">
				<img src="../banner dự án1/sp4.jpg" alt="" />
				<p class="name_user">Lê Minh Đương</p>
				<p>Lập trình viên</p>
			</div>
		</div>
	</div>
	<div class="box_doi_ngu">
		<div class="box_title_doi_ngu">
			<h2>Cảm nhận khách hàng</h2>
			<p>
				Những cảm nhận của khách hàng shop luôn cập nhật <br />
				để có được những sản phẩm tốt nhất.
			</p>
		</div>
	</div>

	<div id="intro-owl">
		<div class="owl-carousel owl-theme">
			<div class="box_comment">
				<img src="../banner dự án1/sp2.jpg" alt="" class="imamge-mua-he" />
				<p class="name_user">Trần Hà Nga</p>
				<p>
					Đối với tôi Nice Face là một lựa chọn hàng đầu. Bởi nơi đây có sự
					phục vụ tốt cũng như chất lượng sản phẩm tuyệt vời.
				</p>
			</div>
			<div class="box_comment">
				<img src="../banner dự án1/sp2.jpg" alt="" class="imamge-mua-he" />
				<p class="name_user">Trần Hà Nga</p>
				<p>
					Đối với tôi Nice Face là một lựa chọn hàng đầu. Bởi nơi đây có sự
					phục vụ tốt cũng như chất lượng sản phẩm tuyệt vời.
				</p>
			</div>
			<div class="box_comment">
				<img src="../banner dự án1/sp2.jpg" alt="" class="imamge-mua-he" />
				<p class="name_user">Trần Hà Nga</p>
				<p>
					Đối với tôi Nice Face là một lựa chọn hàng đầu. Bởi nơi đây có sự
					phục vụ tốt cũng như chất lượng sản phẩm tuyệt vời.
				</p>
			</div>
			<div class="box_comment">
				<img src="../banner dự án1/sp2.jpg" alt="" class="imamge-mua-he" />
				<p class="name_user">Trần Hà Nga</p>
				<p>
					Đối với tôi Nice Face là một lựa chọn hàng đầu. Bởi nơi đây có sự
					phục vụ tốt cũng như chất lượng sản phẩm tuyệt vời.
				</p>
			</div>
		</div>
		<div class="slider slider-nav"></div>
	</div>
	<!-- Footer -->
	<div class="box_footer">
		<div class="footer">
			<div class="box_footer_1">
				<div class="logo">
					<img src=".../image/Screenshot_2022-11-04_132926-removebg-preview.png" alt="" />
				</div>
				<div class="">
					<span>Tuy không xinh <br />
						Nhưng tôi biết thế nào <br />
						cho chị em đẹp.
					</span>
				</div>
				<div class="icon-footer">
					<ul class="sci">
						<li>
							<a href="#"><i class="fa-brands fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa-brands fa-instagram"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa-brands fa-twitter"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="box_footer_2">
				<h3>Của hàng</h3>
				<div class="element_0123">
					<ul>
						<li><a href="#">Dưỡng da</a></li>
						<li><a href="#">Mặt nạ</a></li>
						<li><a href="#">Trang điểm</a></li>
						<li><a href="#">Chống nắng</a></li>
						<li><a href="#">Chăm sóc tóc và cơ thể</a></li>
					</ul>
				</div>
			</div>
			<div class="box_footer_3">
				<h3>Liên kết nhanh</h3>
				<div class="element_0123">
					<ul>
						<li><a href="../blog.html">Bài viết</a></li>
						<li><a href="../login_register/">Đăng nhập</a></li>
						<li><a href="../cart.html">Giỏ hàng</a></li>
					</ul>
				</div>
			</div>
			<div class="box_footer_4">
				<h3>Liên hệ</h3>
				<div class="element_0123">
					<ul>
						<li>
							<a href="#"><i class="fa-solid fa-location-dot"></i> 86/53 Tân Chánh
								Hiệp, Đông Bắc, Quận 12, TP HCM</a>
						</li>
						<li>
							<a href="#"><i class="fa-solid fa-phone"></i> 0366764838</a>
						</li>
						<li>
							<a href="#"><i class="fa-regular fa-envelope"></i>
								nicaface@gmail.com</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
<script>
	$(document).ready(function() {
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 2,
			lazyLoad: true,
			loop: true,
			margin: 10,
			autoplay: NodeFilter,
			autoplayTimeout: 2000,
			autoplayHoverPause: NodeFilter,
		});
		$('.play').on('click', function() {
			owl.trigger('play.owl.autoplay', [1000]);
		});
		$('.stop').on('click', function() {
			owl.trigger('stop.owl.autoplay');
		});
	});
</script>

</html>