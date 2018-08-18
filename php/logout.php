<?php
   include("logger.php");
   include("config.php");
   include("general_functions.php");
   
   session_destroy();
   
   header("location:../sites/page-login.html");
   exit();
	
	
?>
