<!-- end the active session -->
<?php
  session_start();
	session_unset();
	session_destroy();
  require 'index.php';
?>

