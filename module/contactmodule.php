<?php
  include_once '../app/connect.php';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
    $contact = sprintf("INSERT INTO ivy_contact(name, email, subject, msg, cont_date) " .
          "VALUES ('%s', '%s', '%s', '%s', '%s'); ",
        mysqli_real_escape_string($conn, $name),
        mysqli_real_escape_string($conn, $email),
        mysqli_real_escape_string($conn, $subject),
        mysqli_real_escape_string($conn, $msg),
        mysqli_real_escape_string($conn, $date),
    		mysqli_insert_id($conn));
        if (mysqli_query($conn, $contact)) {
          $i = "sent";
        } else {
          $i = "failed";
        }
        echo $i;
  }
?>
