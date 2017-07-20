<?php
  $conn = new mysqli('localhost', 'root', 'root', 'model');
  if ($conn) {
    echo "Connected";
  } else {
    echo "Failed";
  }
?>
