<nav class="navbar navbar-inverse w3-container">
	<div class="container">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		</button>
	<div class="w3-center collapse navbar-collapse top-nav w3l" id="bs-example-navbar-collapse-1">
		<ul class="w3-center nav navbar-nav linkEffects linkHoverEffect_11 custom-menu">
			<li class="<?php echo $url['home']; ?>"><a href="<?php echo BASE_URL ?>"><span>Home</span></a></li>
			<li class="<?php echo $url['blog']; ?>"><a href="#about" class="scroll"><span>Blog</span></a></li>
			<li class="<?php echo $url['gallery']; ?>"><a href="<?php echo BASE_URL . "gallery.php" ?>"><span>Gallery</span></a></li>
      <li class="<?php echo $url['event']; ?>"><a href="#gallery" class="scroll"><span>Event</span></a></li>
			<li class="<?php echo $url['contact'] ?>"><a href="#contact" class="scroll"><span>Contact</span></a></li>
		</ul>
	</div>
	</div>
</nav>
