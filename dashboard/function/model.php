<?php
  class Model
  {
    function countAllFunc($conn, $tb_name)
    {
      $count = "SELECT COUNT(*) FROM $tb_name";
      $result = mysqli_query($conn, $count);
      if ($result) {
        $row = mysqli_fetch_array($result);
        return $row[0];
      }
    }

    function countFilterFunc($conn, $tb_name, $key, $value)
    {
      $count = "SELECT COUNT(*) FROM $tb_name WHERE $key='$value'";
      $result = mysqli_query($conn, $count);
      if ($result) {
        $row = mysqli_fetch_array($result);
        return $row[0];
      }
    }
  }
  $model = new Model;
?>
