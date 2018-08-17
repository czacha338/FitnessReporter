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
	   $user_check = $_SESSION['login_user'];
	   $ses_sql = mysqli_query($conn,"select user_name from users where user_name = '$user_check' ");
	   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	   $login_session = $row['username'];
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