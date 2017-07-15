<?php
  /**
   * Configuration files
   */
  class Config
  {
    function get_web_path($file_system_path) {
    	return str_replace($_SERVER['DOCUMENT_ROOT'], '', $file_system_path);
    }
    function debug_print($message) {
    	if (DEBUG_MODE)
      {
    		echo $message;
    	}
    }
    function handle_error($user_error_message, $system_error_message) {
    	header("Location: " . BASE_URL . "404?" .
    	"error_message={$user_error_message}&" .
    	"system_error_message={$system_error_message}");
    	exit($conn);
    }
  }
$config = new Config;
?>
