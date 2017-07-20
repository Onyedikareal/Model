<?php
  session_start();
  include_once 'app/app.php';
  include_once 'function/model.php';
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
          <i class="material-icons md-48">email</i>
          <div class="text-large"><?php echo $model->countAllFunc($conn, "ivy_contact"); ?></div>
          <div class="meduim"> Total Contacts </div>
         </div>
      </div>
      <div class="w3-col s12 m4">
        <div class="widget-holder w3-center">
          <i class="material-icons md-48">mode_edit</i>
          <div class="text-large"><?php echo $model->countAllFunc($conn, "ivy_blog"); ?></div>
          <div class="meduim"> Total Blog Posts </div>
         </div>
      </div>
      <div class="w3-col s12 m4">
        <div class="widget-holder w3-center">
          <i class="material-icons md-48">insert_photo</i>
          <div class="text-large"><?php echo $model->countAllFunc($conn, "ivy_gallery"); ?></div>
          <div class="meduim"> Total Gallery Uploads </div>
         </div>
      </div>
      <div class="w3-container">
        <div class="w3-col s12 m12">
          <div class="widget-holder-fluid">
            <div class="text-small">Newest Message From Contact</div>
           </div>
        </div>
      </div>
    </section>
    <!-- Script -->
    <?php include_once 'script.php'; ?>
  </body>
</html>
