<?php
  session_start();
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $logins = array(
      'username' => "admin",
      'password' => "letmein"
    );
    if ($_POST['username'] == $logins['username'] && $_POST['password'] == $logins['password']) {
      $_SESSION['admin_id'] = md5('admin');
      echo "in";
    } else {
      echo "lock";
    }
  }
?>
