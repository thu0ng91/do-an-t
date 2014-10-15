<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Đọc truyện online</title>

<!-- Bootstrap -->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<?php echo TZ_Helper::htmlCss('bootstrap.min')?>

<!-- Bootstrap Theme-->
<!-- <link href="css/cyborg-theme.css" rel="stylesheet"> -->
<?php echo TZ_Helper::htmlCss('cyborg-theme')?>


<!-- font-awesome-->
<!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
<?php echo TZ_Helper::htmlCss('font-awesome.min')?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="js/jquery-2.1.1.min.js"></script> -->
<?php echo TZ_Helper::htmlJs('jquery-2.1.1.min')?>

<!-- jQuerySimplyscroll -->
<!-- <script type="text/javascript" src="js/jquery.simplyscroll.js"></script> -->
<?php echo TZ_Helper::htmlJs('jquery.simplyscroll')?>
<!-- <link rel="stylesheet" href="css/jquery.simplyscroll.css" media="all" type="text/css"> -->
<?php echo TZ_Helper::htmlCss('jquery.simplyscroll')?>

<script type="text/javascript">
		(function($) {
			$(function() {
				$("#scroller").simplyScroll({pauseOnHover: true});
			});
		})(jQuery);
</script>

<!-- Custom css by trans -->
<!-- <link href="css/custom.css" rel="stylesheet"> -->
<?php echo TZ_Helper::htmlCss('custom')?>

</head>
<body>

	<div class="navbar navbar-default" id="topnav">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">ZTruyen</a>
		</div>
		<div class="navbar-collapse collapse navbar-responsive-collapse">
			<form class="navbar-form navbar-right">
				<input type="text" class="form-control col-lg-8"
					placeholder="Tìm kiếm tác giả hoặc tác phẩm" size="50"> <a href="#"
					class="btn btn-primary">Tìm kiếm</a>
			</form>
		</div>
	</div>
	<!-- End #topbar -->


	<div class="container" id="wrapper">
		<!-- TopMenu -->
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='#'><i class="fa fa-home fa-2x"></i>
						Trang chủ</a></li>
				<li><a href='#'><i class="fa fa-file-image-o fa-2x"></i> Truyện
						tranh</a>
				
				<li><a href='#'><i class="fa fa-file-text-o fa-2x"></i> Truyện chữ</a></li>
				<li><a href='#'><i class="fa fa-credit-card fa-2x"></i> Liên hệ</a></li>
			</ul>
		</div>
		<!-- End TopMenu -->
		<div id="content">
			
			<!-- End #featured -->
			<div id="sidebar" class="col-md-3 col-sm-12 container-fluid">
				<div id="category" class="col-md-10 col-sm-12 container-fluid">
					<div class="mtitle">
						<i class="fa fa-bars fa-3x navbar-left"></i> <span>Danh mục</span>
						<h3>Thể loại truyện</h3>
						<hr />
					</div>
					<div class="container-fluid">
						<div class="col-md-6 col-sm-4 col-xs-4">
							<a href="#"><i class="fa fa-chevron-right fa-1x"></i> Hoạt hình</a>
						</div>
						<div class="col-md-6 col-sm-4 col-xs-4">
							<a href="#"><i class="fa fa-chevron-right fa-1x"></i> Hoạt hình</a>
						</div>
						<div class="col-md-6 col-sm-4 col-xs-4">
							<a href="#"><i class="fa fa-chevron-right fa-1x"></i> Hoạt hình</a>
						</div>
						<div class="col-md-6 col-sm-4 col-xs-4">
							<a href="#"><i class="fa fa-chevron-right fa-1x"></i> Hoạt hình</a>
						</div>
						<div class="col-md-6 col-sm-4 col-xs-4">
							<a href="#"><i class="fa fa-chevron-right fa-1x"></i> Hoạt hình</a>
						</div>
						<div class="col-md-6 col-sm-4 col-xs-4">
							<a href="#"><i class="fa fa-chevron-right fa-1x"></i> Hoạt hình</a>
						</div>
						<div class="col-md-6 col-sm-4 col-xs-4">
							<a href="#"><i class="fa fa-chevron-right fa-1x"></i> Hoạt hình</a>
						</div>
						<div class="col-md-6 col-sm-4 col-xs-4">
							<a href="#"><i class="fa fa-chevron-right fa-1x"></i> Hoạt hình</a>
						</div>
						<div class="col-md-6 col-sm-4 col-xs-4">
							<a href="#"><i class="fa fa-chevron-right fa-1x"></i> Hoạt hình</a>
						</div>

					</div>
				</div>
				<div id="abc" class="col-md-2 col-sm-12">
					<div class=" container-fluid">

						<a href="#" class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a> <a href="#"
							class="col-md-12 col-sm-2">A</a>
					</div>
				</div>

			</div>
			<!-- End #sidebar -->
			
			<!-- main-content ============================================================================ -->
			<!-- ========================================================================================= -->
			
			<div id="main-content" class="col-md-9 container-fluid">
				
			<?php echo $content_for_layout ;// các file view được nạp vào layout?>

			</div>
			
			<!-- End main-content ============================================================================ -->
			<!-- ========================================================================================= -->
		</div>
		<!-- End #content -->
	</div>
	<!-- End #wrapper -->
	<div id="footer" class="container-fluid">
		<div class="container">

			<div class="col-md-4 box">
				<span>Mạng xã hội</span>
				<h4>TruyenZ trên facebook</h4>
				<hr />
				<div>
					<p>facebook</p>
				</div>
			</div>
			<div class="col-md-4 box">
				<span>Liên hệ</span>
				<h4>Thông tin website</h4>
				<hr />
				<div>
					<p>Website được phát triển Nhóm yêu thích truyện tranh truyenmix
						tại Hà Nội</p>
				</div>
			</div>
			<div class="col-md-4 box"></div>

		</div>

	</div>

<!-- 	<script src="js/custom.js"></script> -->
	<?php echo TZ_Helper::htmlJs('custom')?>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- 	<script src="js/bootstrap.min.js"></script> -->
	<?php echo TZ_Helper::htmlJs('bootstrap.min')?>
</body>
</html>