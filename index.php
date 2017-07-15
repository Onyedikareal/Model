<?php
	session_start();
	include_once 'app/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Obrori Ivy</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="<?php echo BASE_URL . "js/jquery-1.11.1.min.js"?>"></script>
<!-- stylesheet -->
<link href="<?php echo BASE_URL . "css/bootstrap.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo BASE_URL . "css/style.css"?>" rel="stylesheet" type="text/css" media="all" />
<!-- //stylesheet -->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="<?php echo BASE_URL . "css/font-awesome.css"?>" type="text/css" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="<?php echo BASE_URL . "css/w3.css"?>" type="text/css" rel="stylesheet">
</head>
<body>
<div class="agileits_main">
<!-- header -->
<div class="w3_agile_logo">
	<h1 class="text-center"><a href="index.html">Obrori Ivy</a></h1>
</div>
<!-- banner -->
<div class="w3_banner">
	<div class="container">
		<div class="slider">
			<div class="callbacks_container">
			   <ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="banner_text_w3layouts">
							<p>Casp Eestibulum </p>
							<span> </span>
							<h3>Maur egetire sit tmae.</h3>
						</div>
					</li>
					 <li>
						<div class="banner_text_w3layouts">
							<p>Rlua vestibulum </p>
							<span> </span>
							<h3>Eget Integer sit amet.</h3>
						</div>
					</li>
					 <li>
						<div class="banner_text_w3layouts">
							<p>Cras vestibulum </p>
							<span> </span>
							<h3>Amet sitamet tus libe.</h3>
						</div>
					</li>
				</ul>
			</div>
		  <script src="<?php echo BASE_URL . "js/responsiveslides.min.js"?>"></script>
		  <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider4").responsiveSlides({
				auto: true,
				pager:true,
				nav:true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });

			});
		 </script>
	   </div>
	</div>
	<div class="social-icons agileits w3-center w3-padding-12">
			<ul>
			<li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
			<li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
			<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
			<li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li>
		</ul>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- menu -->
<?php
	$uri['home'] = "agile_active";
	include_once 'menu.php';
?>
<!-- //menu -->
  </div>
<!-- //banner -->
<!-- home -->
<div class="home_ w3layouts">
 <div class="home_grids_w3">
  <div class="home_main">
	   <div class="col-md-7 col-sm-7 col-xs-7 img1 img-grid">
		   <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Ras Bestibulum </p>
			</div>
		</div>
		<div class="col-md-5 img2 col-sm-5 col-xs-5 img-grid">
		    <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Cas vstibulum </p>
			  </div>
		</div>
		<div class="clearfix"></div>
	</div>
  <div class="home_main">
	   <div class="col-md-5 col-sm-5 col-xs-5 img3 img-grid ">
		    <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Asid Estibulum </p>
			  </div>
		</div>
	  <div class="col-md-7 col-sm-7 col-xs-7 img4 img-grid">
		    <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Cras vestibulum </p>
			</div>
	 </div>
	<div class="clearfix"></div>
  </div>
   <div class="home_main">
	   <div class="col-md-7 col-sm-7 col-xs-7 img-grid  img5">
		  <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Cras vestibulum </p>
		  </div>
		 </div>
		<div class="col-md-5 col-sm-5 col-xs-5 img-grid img6">
		  <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Cras vestibulum </p>
		  </div>
		 </div>
		<div class="clearfix"></div>
  </div>
</div>
</div>
<!-- //home -->
<!-- contact -->
<?php include_once 'contact.php'; ?>
<!-- //contact -->
<!-- copy-right -->
<?php include_once 'footer.php'; ?>
<!-- //copy-right -->
<!-- Gallery-plugin -->
<script src="<?php echo BASE_URL . "js/jquery.mobile.custom.min.js"?>"></script>
<script src="<?php echo BASE_URL . "js/jquery.cm-overlay.js"?>"></script>
		<script>
			$(document).ready(function(){
				$('.cm-overlay').cmOverlay();
			});
		</script>
<!-- //Gallery-plugin -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?php echo BASE_URL . "js/move-top.js"?>"></script>
<script type="text/javascript" src="<?php echo BASE_URL . "js/easing.js"?>"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();

		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<script src="<?php echo BASE_URL . "js/SmoothScroll.min.js"?>"></script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
		};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<script type="text/javascript" src="<?php echo BASE_URL . "js/bootstrap.js"?>"></script>
</body>
</html>
