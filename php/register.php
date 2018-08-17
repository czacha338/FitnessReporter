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
			$myusername = mysqli_real_escape_string($conn,$_POST['UserName']);
			$myemail = mysqli_real_escape_string($conn,$_POST['Email']);
			$mypassword = mysqli_real_escape_string($conn,$_POST['Password']); 
			$mypassword_retype = mysqli_real_escape_string($conn,$_POST['PasswordRetype']); 
      
			if($mypassword != $mypassword_retype){
				web_alert("Please repeat your password correctly");
				close_connection($conn);
			} 
			else{
				$result = check_if_user_exists($conn,$myusername);
				if($result == TRUE) {
					web_alert("User already exists in database");
					close_connection($conn);
				}
				else{
					$result = check_if_email_exists($conn,$myemail);
					if($result == TRUE) {
						web_alert("Email already exists in database");
						close_connection($conn);
					}
					else{
						$sql = "INSERT INTO users (user_name, user_email, user_password) VALUES ('$myusername','$myemail','$mypassword')";
						if ($conn->query($sql) === TRUE) {
							web_alert("User created succesfully, try to log in");
							close_connection($conn);
							header("location:../sites/page-login.html");
							exit();
						} 
						else {
							web_alert("Error: User has not been created");
							close_connection($conn);
						}
					}
			
				}
			}
		}
	}
	
?>