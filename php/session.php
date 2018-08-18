<?php
	include('logger.php');
	include('config.php');
	include('general_functions.php');
	
   session_start();
   $conn = create_connection();
   if ($conn == FALSE){
	   web_alert("Connect to database failed");
   }
   
   else{
	   if(!isset($_SESSION['login_user'])){
			header("location:sites/page-login.html");
			close_connection($conn);
			exit();
		}
		else{
			header("location:sites/page-main.html");
			close_connection($conn);
			exit();
		}
   }
   
?>