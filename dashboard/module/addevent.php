<?php
session_start();
include_once '../app/connect.php';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    	# Grab Image Data
    	$image_fieldname = "uploadphoto";
      $name = $_POST['evt_name'];
      $location = $_POST['evt_loc'];
      $desc = $_POST['evt_desc'];

    	# function for url checks
    	function MakeUrls($desc)
    	{
    		$find=array('`((?:https?|ftp)://\S+[[:alnum:]]/?)`si','`((?<!//)(www\.\S+[[:alnum:]]/?))`si');
    		$replace=array('<a href="$1" target="_blank">$1</a>','<a href="'. BASE_URL .'module/recordurl?url=$1" target="_blank">$1</a>');
    		return preg_replace($find,$replace,$desc);
    	}

    	//Function testing
    	$desc = preg_replace("/[\r\n]+/", "<br>", $_POST['evt_desc']);
    	//Make Url clickable
    	$status=MakeUrls($desc);
    	$status=preg_replace('/#(\\w+)/','<a href="'. BASE_URL .'hash?hash=$1">$0</a>',$desc);
    	//Check for Mentions
    	$status=preg_replace('/(@\w+)/','<a href="'. BASE_URL .'mention?name=$1">$0</a>',$desc);

    	//Reg ErrorException
    	$desc = str_replace('<script>', '',$desc);
    	$desc = str_replace('</script>', '',$desc);
    	$desc = str_replace('<p>', '',$desc);
    	$desc = str_replace('</p>', '',$desc);
    	$desc = str_replace('<style>', '',$desc);
    	$desc = str_replace('</style>', '',$desc);

      if ($_FILES['uploadphoto']['size'] !== 0) {
    	# Potential PHP upload errors
    	$php_errors = array(1 => 'Maximum file size in php.ini exceeded',
    			2 => 'Maximum file size in HTML form exceeded',
    			3 => 'Only part of the file was uploaded',
    			4 => 'No file was selected to upload.');

          // Make sure we didn't have an error uploading the image
    ($_FILES[$image_fieldname]['error'] == 0)
     or handle_error("the server couldn't upload the image you selected.",
     $php_errors[$_FILES[$image_fieldname]['error']]);
    // Is this file the result of a valid upload?
    @is_uploaded_file($_FILES[$image_fieldname]['tmp_name'])
     or handle_error("you were trying to do something naughty. Shame on you!",
     "Uploaded request: file named " .
     "'{$_FILES[$image_fieldname]['tmp_name']}'");
    // Is this actually an image?
    @getimagesize($_FILES[$image_fieldname]['tmp_name'])
     or handle_error("you selected a file for your picture " .
     "that isn't an image.",
     "{$_FILES[$image_fieldname]['tmp_name']} " .
     "isn't a valid image file.");
    // Name the file uniquely
    $now = time();
    while (file_exists($upload_filename = $upload_dir . $now .
     '-' .
     $_FILES[$image_fieldname]['name'])) {
     $now++;
    }
    // Finally, move the file to its permanent location
    @move_uploaded_file($_FILES[$image_fieldname]['tmp_name'], $upload_filename)
     or handle_error("we had a problem saving your image to " .
     "its permanent location.",
     "permissions or related error moving " .
     "file to {$upload_filename}");

    	$addevent = sprintf("INSERT INTO ivy_event (name, location, event_desc, image_path, date) " .
                  "VALUES ('%s', '%s', '%s', '%s', '%s'); ",
    			    mysqli_real_escape_string($conn, $name),
    			    mysqli_real_escape_string($conn, $location),
    			    mysqli_real_escape_string($conn, $desc),
              mysqli_real_escape_string($conn, $upload_filename),
              mysqli_real_escape_string($conn, $date),
    			    mysqli_insert_id($conn));

    	// Insert the Post into the database
    	if (mysqli_query($conn, $addevent)) {
    		$_SESSION['msg'] = "Your event was successfully updated";
    		header("Location: "  . $_SERVER['HTTP_REFERER']);
    	} else {
    	  $_SESSION['msg'] = "Unsuccessful event update";
    		header("Location: "  . $_SERVER['HTTP_REFERER']);
    	}
    } else {
      $addevent = sprintf("INSERT INTO ivy_event (name, location, event_desc, image_path, date) " .
                  "VALUES ('%s', '%s', '%s', '%s', '%s'); ",
    			    mysqli_real_escape_string($conn, $name),
    			    mysqli_real_escape_string($conn, $location),
    			    mysqli_real_escape_string($conn, $desc),
              mysqli_real_escape_string($conn, $upload_filename),
              mysqli_real_escape_string($conn, $date),
    			    mysqli_insert_id($conn));

    	// Insert the Post into the database
    	if (mysqli_query($conn, $addevent)) {
    		$_SESSION['msg'] = "Your event was successfully updated";
    		header("Location: "  . $_SERVER['HTTP_REFERER']);
    	} else {
    	  $_SESSION['msg'] = "Unsuccessful event update";
    		header("Location: "  . $_SERVER['HTTP_REFERER']);
    	}
    }
  }
?>
