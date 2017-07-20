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
      $url['contact'] = "active";
      include_once 'sidepane.php';
      include_once 'header.php';
    ?>
    <section class="wrapper">
      <div class="w3-container">
        <div class="w3-col s12 m12">
          <div class="widget-holder-fluid">
            <div class="text-small">Contacts on <?php echo $sitename ?></div>
            <div class="w3-container">
              <table class="ui very fixed basic table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Precious Tom</td>
                    <td>tomprezine@gmail.com</td>
                    <td>Lorem ipsum dolor sit amet</td>
                    <td>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
           </div>
        </div>
      </div>
    </section>
    <!-- Script -->
    <?php include_once 'script.php'; ?>
  </body>
</html>
