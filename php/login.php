<?php
   include("logger.php");
   include("config.php");
   include('general_functions.php');
   
   session_start();
   $conn = create_connection();
    if ($conn == FALSE){
	   web_alert("Connect to database failed");
	}
	else{
		if($_SERVER["REQUEST_METHOD"] == "POST") {
    
			$myusername = mysqli_real_escape_string($conn,$_POST['username']);
			$mypassword = mysqli_real_escape_string($conn,$_POST['password']);
	
			$result = $login_user($conn,$myusername,$mypassword);

			if($result == TRUE) {
				session_register("myusername");
				$_SESSION['login_user'] = $myusername;
				close_connection($conn);
				header("location: welcome.php");
			}
			else{
				web_alert("password or username is wrong");
				close_connection($conn);		 
			}
		}

	}
	
?>
