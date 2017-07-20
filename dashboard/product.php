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
      $url['product'] = "active";
      include_once 'sidepane.php';
      include_once 'header.php';
    ?>
    <section class="wrapper">
      <div class="w3-container">
        <div class="w3-col s12 m12">

          <form class="widget-holder-fluid" action="<?php echo BASE_URL . "module/addproduct" ?>" method="post" enctype="multipart/form-data">
            <div class="text-small">Add Products</div>
            <div class="w3-container">

              <div class="ui equal width form">
                <div class="fields">
                  <div class="field">
                    <label>Product Name</label>
                    <input type="text" placeholder="Product Name">
                  </div>
                  <div class="field">
                    <label>Product Category</label>
                    <input type="text" placeholder="Product Category">
                  </div>
                </div>
                <div class="fields">
                  <div class="field">
                    <label>Product Price</label>
                    <div class="ui right labeled input">
                      <label for="amount" class="ui label">$</label>
                      <input type="text" placeholder="Amount" id="amount">
                      <div class="ui basic label">.00</div>
                    </div>
                  </div>
                  <div class="field">
                    <label>Product Maker</label>
                    <input type="text" placeholder="Product Maker">
                  </div>
                  <div class="field">
                    <label>Product Description</label>
                    <textarea rows="2"></textarea>
                  </div>
                </div>
                <div class="field">
                  <label>Product Photo</label>
                  <button type="button" name="button" class="ui button ">
                    <label class="myLabel btn-selector">
                      <span>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                        <input type="file" name="files[]" class="hide" accept="image/*" onchange="loadFile(event)" multiple="">
                        <i class="fa fa-camera"></i> upload photo
                      </span>
                    </label>
                  </button>
                </div>
                <div class="w3-container w3-center">
                  <div class="field">
                    <button type="submit" name="button" class="ui button blue"> Post Product </button>
                  </div>
                </div>
              </div>
            </div>
           </form>

        </div>
      </div>
    </section>
    <!-- Script -->
    <?php include_once 'script.php'; ?>
  </body>
</html>
