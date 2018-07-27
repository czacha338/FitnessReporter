<?php
include('config.php');

function create_connection(){
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  
	return $conn;
}

function close_connection($con){
	mysqli_close($con);
}


function login_user($conn,$username,$password){
	$sql = "SELECT user_id FROM users WHERE (user_name = '$username' or user_email = '$username' ) and user_password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);
	if($count >= 1) $res = TRUE;
	else $res = FALSE;
	
	return $res;	
}

function check_if_user_exists($conn,$data){
	$sql = "SELECT 'user_name' from users where 'user_name'='$data'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['active'];
	$count = mysqli_num_rows($result);
	if($count >= 1) $res = TRUE;
	else $res = FALSE;
	
	return $res;
}

function check_if_email_exists($conn,$data){
	$sql = "SELECT 'user_email' from users where 'user_email'='$data'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['active'];
	$count = mysqli_num_rows($result);
	if($count >= 1) $res = TRUE;
	else $res = FALSE;
	
	return $res;
}

?>