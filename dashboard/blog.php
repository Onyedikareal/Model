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
      $url['blog'] = "active";
      include_once 'sidepane.php';
      include_once 'header.php';
    ?>
    <section class="wrapper">
      <div class="w3-container">
        <div class="w3-col s12 m12">
          <div class="widget-holder-fluid">
            <div class="w3-container">
              <div class="w3-col s12 m6">
                <div class="text-small">Add Blog Post</div>
                <textarea name="name" class="ui input blog-editor"></textarea>
              </div>
              <div class="w3-col s12 m6">
                <div class="text-small">Live Blog Preview</div>
                <article class="result">

                </article>
              </div>
            </div>
           </div>
        </div>
      </div>
    </section>
    <!-- Script -->
    <?php include_once 'script.php'; ?>
  </body>
</html>
