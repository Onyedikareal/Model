<?php
  session_start();
  include_once 'app/app.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <?php include_once 'style.php'; ?>
    <link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/css/ui.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "asset/css/w3.css" ?>">
    <script src="<?php echo BASE_URL . "asset/js/jquery.min.js" ?>"></script>
  </head>
  <body>
    <!-- Sidemenu Pane -->
    <?php
      $url['home'] = "active";
      include_once 'sidepane.php';
      include_once 'header.php';
    ?>
    <section class="wrapper">
      <div class="w3-col s12 m4">
        <div class="widget-holder w3-center">
          <i class="material-icons md-48">monetization_on</i>
          <div class="text-large">$1023</div>
          <div class="meduim"> Total Sales </div>
         </div>
      </div>
      <div class="w3-col s12 m4">
        <div class="widget-holder w3-center">
          <i class="material-icons md-48">group</i>
          <div class="text-large">100+</div>
          <div class="meduim"> Total Users </div>
         </div>
      </div>
      <div class="w3-col s12 m4">
        <div class="widget-holder w3-center">
          <i class="material-icons md-48">bubble_chart</i>
          <div class="text-large">20</div>
          <div class="meduim"> New Request </div>
         </div>
      </div>
      <div class="w3-container">
        <div class="w3-col s12 m12">
          <div class="widget-holder-fluid">
            <div class="text-small">100+</div>
           </div>
        </div>
      </div>
    </section>
    <!-- Script -->
    <?php include_once 'script.php'; ?>
  </body>
</html>
