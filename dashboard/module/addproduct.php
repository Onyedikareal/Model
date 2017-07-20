<?php
  include_once '../app/connect.php';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valid_formats = array("jpg", "png", "gif", "zip", "bmp");
    $max_file_size = 1024*100; //100 kb
    $path = "../uploads/image/"; // Upload directory
    $count = 0;

  	// Loop $_FILES to exeicute all files
  	foreach ($_FILES['files']['name'] as $f => $name) {
  	    if ($_FILES['files']['error'][$f] == 4) {
  	      continue; // Skip file if any error found
  	    }
  	    if ($_FILES['files']['error'][$f] == 0) {
  	      if ($_FILES['files']['size'][$f] > $max_file_size) {
            $message[] = "$name is too large!.";
            continue; // Skip large files
  	      }
  			  elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)){
    				$message[] = "$name is not a valid format";
    				continue; // Skip invalid file formats
  			  }
  	      else{ // No error found! Move uploaded files
            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
            $count++; // Number of successfully uploaded file
            // Add Other Parameters
            $product = sprintf("INSERT INTO ed_product(name, category, color, price, item_desc, maker, likes, upload_date) " .
                "VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s'); ",
              mysqli_real_escape_string($conn, $name),
              mysqli_real_escape_string($conn, $cat),
              mysqli_real_escape_string($conn, $color),
              mysqli_real_escape_string($conn, $price),
              mysqli_real_escape_string($conn, $item_desc),
              mysqli_real_escape_string($conn, $maker),
              mysqli_real_escape_string($conn, 0),
              mysqli_real_escape_string($conn, $date),
          		mysqli_insert_id($conn));

            if (mysqli_query($conn, $product)) {
              $img = sprintf("INSERT INTO ed_product_image(path, product_id) " .
                  "VALUES ('%s', '%s'); ",
                mysqli_real_escape_string($conn, $path.$name),
                mysqli_real_escape_string($conn, mysqli_insert_id($conn)),
            		mysqli_insert_id($conn));

                if (mysqli_query($conn, $img)) {
                  $_SESSION['msg'] = '
                  <div class="ui success message">
                    <div class="header">Upload Completed</div>
                    <p>You did a great job <i class="hand peace icon"></i> .</p>
                  </div>
                  ';
                  header("Location:". $_SERVER['HTTP_REFERER']);
                } else {
                  echo "Failed";
                }
            } else {
              $i = "failed";
            }
  	      }
  	    }
  	}
  }
?>
