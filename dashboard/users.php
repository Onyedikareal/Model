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
      $url['users'] = "active";
      include_once 'sidepane.php';
      include_once 'header.php';
    ?>
    <section class="wrapper">
      <div class="w3-container">
        <div class="w3-col s12 m12">
          <div class="widget-holder-fluid">
            <div class="text-small">Users on <?php echo $sitename ?></div>
            <div class="w3-container">
              <table class="ui very basic table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Verified</th>
                    <th>Joined Date</th>
                    <th>Manage</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John</td>
                    <td>Kendrick</td>
                    <td>tomprezine@gmail.com</td>
                      <td class="center aligned">
                        <i class="large green checkmark icon"></i>
                      </td>
                    <td>3 Days Ago</td>
                    <td>
                      <button class="circular ui yellow icon button">
                        <i class="ban icon"></i>
                      </button>
                      <button class="circular ui red icon button">
                        <i class="remove icon"></i>
                      </button>
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
