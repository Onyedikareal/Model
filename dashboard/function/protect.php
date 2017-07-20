<?php
  class Protect
  {
    function checklogin()
    {
      if (isset($_SESSION['userId'])) {
        header("Location: home");
      } else {
        header("Location: login");
      }
    }
  }

  $protect = new Protect;
?>
