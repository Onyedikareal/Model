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
  	$url['blog'] = "agile_active";
  	include_once 'menu.php';
  ?>
  <!-- //menu -->
  </div>
<!-- //banner -->
<!-- gallery -->
<div class="gallery_wthree" id="blog">
 <div class="container">
   <div class="w3-col s12 m4">
     <div class="blog-wrap">

     </div>
   </div>
   <div class="w3-col s12 m4">
     <div class="blog-wrap">

     </div>
   </div>
   <div class="w3-col s12 m4">
     <div class="blog-wrap">

     </div>
   </div>

   <div class="w3-col s12 m6">
     <div class="blog-wrap">

     </div>
   </div>
   <div class="w3-col s12 m6">
     <div class="blog-wrap">

     </div>
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
