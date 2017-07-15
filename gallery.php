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
  <!-- menu -->
  <?php
  	$uri['home'] = "agile_active";
  	include_once 'menu.php';
  ?>
  <!-- //menu -->
  </div>
<!-- //banner -->
<!-- gallery -->
<div class="gallery_wthree" id="gallery">
 <div class="container">
      <h3 class="title">gallery</h3>
	  <div class="gallery_grid agileits_w3layouts">
	    <div class="col-md-6  col-sm-6 col-xs-6 grid_w3">
			<div class="grid-1">
				<a class="cm-overlay" href="images/2.jpg">
					<img src="images/2.jpg" alt=" " class="img-responsive" />
					 <div class="w3agile-text w3agile-text-smal1">
						<h5>Snap shot</h5>
					</div>
				</a>
			</div>
			 <div class="sub_grid gallery_w3l">
				   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
						<a class="cm-overlay" href="images/14.jpg">
							<img src="images/14.jpg" alt=" " class="img-responsive" />
							<div class="w3agile-text w3agile-text-small">
								<h5>Snap shot</h5>
					        </div>
						</a>
					</div>
				   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-b grid_w3l">
					 	<a class="cm-overlay" href="images/13.jpg">
							<img src="images/13.jpg" alt=" " class="img-responsive" />
							<div class="w3agile-text w3agile-text-smal1">
								<h5>Snap shot</h5>
							</div>
						</a>
					</div>
				   <div class="clearfix"></div>
			 </div>
        </div>
		<div class="col-md-6 col-sm-6 col-xs-6 grid_w3">
		   <div class="sub_grid">
			   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
          			<a class="cm-overlay" href="images/15.jpg">
						<img src="images/15.jpg" alt=" " class="img-responsive" />
						<div class="w3agile-text w3agile-text-small">
							<h5>Snap shot</h5>
						</div>
					</a>
			   </div>
			   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-d grid_w3l">
					<a class="cm-overlay" href="images/16.jpg">
						<img src="images/16.jpg" alt=" " class="img-responsive" />
						<div class="w3agile-text w3agile-text-smal1">
							<h5>Snap shot</h5>
						</div>
					</a>
				</div>
				 <div class="clearfix"></div>
			   </div>
		    <div class="grid-1 grid-2">
				<a class="cm-overlay" href="images/7.jpg">
					<img src="images/7.jpg" alt=" " class="img-responsive" />
					<div class="w3agile-text w3agile-text-smal1">
							<h5>Snap shot</h5>
					</div>
				</a>
		    </div>
		   <div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	  </div>
</div>
</div>
<!-- //gallery -->
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
