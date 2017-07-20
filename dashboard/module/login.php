<?php
  session_start();
  include_once '../app/app.php';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = trim(mysqli_real_escape_string($conn, $_POST['username']));
    $p = trim(mysqli_real_escape_string($conn, $_POST['username']));

    if ($u == $superuserusername && $p == $superuserpassword) {
      $_SESSION['access_control'] = 1;
      $_SESSION['user_id'] = 1;
      $_SESSION['username'] = $superuserusername;
      $i = "auth successfully";
    } else if ($u == $adminusername && $p == $adminpassword) {
      $_SESSION['access_control'] = 2;
      $_SESSION['user_id'] = 2;
      $_SESSION['username'] = $adminusername;
      $i = "auth successfully";
    }  else if ($u == $developerusername && $p == $developerpassword) {
      $_SESSION['access_control'] = 3;
      $_SESSION['user_id'] = 3;
      $_SESSION['username'] = $developerusername;
      $i = "auth successfully";
    }  else {
      $_SESSION['access_control'] = Null;
      $_SESSION['user_id'] = Null;
      $_SESSION['username'] = Null;
      $i = "auth failed";
    }
    echo $i;
  }
?>
