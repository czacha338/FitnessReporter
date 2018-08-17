<?php
   include("logger.php");
   include("config.php");
   include("general_functions.php");
   
   session_start();
   $conn = create_connection();
    if ($conn == FALSE){
	   web_alert("Connect to database failed");
	}
	else{
		if($_SERVER["REQUEST_METHOD"] == "POST") {
    
			$myusername = mysqli_real_escape_string($conn,$_POST['username']);
			$mypassword = mysqli_real_escape_string($conn,$_POST['password']);
	
			$result = login_user($conn,$myusername,$mypassword);

			if($result == TRUE) {
				$id = get_id($conn,$myusername);
				if ($id != FALSE){
					$_SESSION['login_user'] = $id;
					close_connection($conn);
					header("location:../sites/page-main.html");
					exit();
				}
				else{	
					web_alert("Cannot log session");
					close_connection($conn);
				}
			}
			else{
				web_alert("password or username is wrong");
				close_connection($conn);		 
			}
		}

	}
	
?>
