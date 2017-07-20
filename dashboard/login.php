<?php
  session_start();
  include_once 'app/app.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard Login</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/css/w3.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/css/ui.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/plugins/semantic-ui/semantic.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/plugins/fontawesome/css/font-awesome.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/plugins/semantic-ui/semantic.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/plugins/semantic-ui/semantic.css" ?>">
    <script src="<?php echo BASE_URL . "asset/js/jquery.min.js" ?>"></script>
  </head>
  <body>

    <section class="loginwrapper">
      <form class="w3-center ui form" onsubmit="login()" action="?" method="post">
				<div class="w3-col s12 m12 report"></div>
				<div class="ui input small field fluid">
          <input type="text" name="username" class="username" placeholder="Username" autofocus>
        </div>
				<div class="ui input small field fluid">
					<input type="password" name="password" class="password" placeholder="Password" id="password">
				</div>
        <!--
        <div class="ui input small field">
					<input type="checkbox" name="visible" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'">
					<label for="visible">Show Password</label>
        </div>
        -->
        <div class="ui input small field">
          <button type="submit" class="ui primary button"> Sign In </button>
        </div>
				</div>
			</form>
    </section>

    <script src="<?php echo BASE_URL . "asset/js/login.js" ?>"></script>
    <script src="<?php echo BASE_URL . "asset/js/custom.js" ?>"></script>
    <script src="<?php echo BASE_URL . "asset/plugins/semantic-ui/semantic.js" ?>"></script>
  </body>
</html>
