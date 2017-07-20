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
      $url['event'] = "active";
      include_once 'sidepane.php';
      include_once 'header.php';
    ?>
    <section class="wrapper">
      <div class="w3-container">
        <div class="w3-col s12 m12">
          <div class="widget-holder-fluid">
            <div class="text-small">Events on <?php echo $sitename ?></div>
            <div class="w3-container">

              <div class="w3-col s12 m12">

                <form class="widget-holder-fluid" action="<?php echo BASE_URL . "module/addevent" ?>" method="post" enctype="multipart/form-data">
                    <div class="ui equal width form">
                      <div class="fields">
                        <div class="field">
                          <label>Events Name</label>
                          <input type="text" name="evt_name" placeholder="Events Name">
                        </div>
                        <div class="field">
                          <label>Events Location</label>
                          <input type="text" name="evt_loc" placeholder="Events Location">
                        </div>
                      </div>
                      <div class="fields">
                        <div class="field">
                          <label>Events Description</label>
                          <textarea rows="2" name="evt_desc"></textarea>
                        </div>
                      </div>
                      <div class="field">
                        <label>Event Photo</label>
                        <button type="button" name="button" class="ui button ">
                          <label class="myLabel btn-selector">
                            <span>
                              <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                              <input type="file" name="uploadphoto" class="hide" accept="image/*" onchange="loadFile(event)">
                              <i class="fa fa-camera"></i> upload photo
                            </span>
                          </label>
                        </button>
                      </div>
                      <div class="w3-container w3-center">
                        <div class="field">
                          <button type="submit" name="button" class="ui button blue"> <i class="checked calendar icon"></i> Post Event </button>
                        </div>
                      </div>
                 </form>

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
