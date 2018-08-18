<?php
include('logger.php');
include('config.php');
include('general_functions.php');

session_start();

function init($data){
	$default_val = "N/A";
	$conn = create_connection();
	if ($conn == FALSE){
	   die("Connection failed: " . $conn->connect_error);
	}
	$sql="select ".$data." from params where params_userid = ".$_SESSION['login_user']." order by params_submission_date desc limit 1";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['active'];
	$count = mysqli_num_rows($result);
	if($count == 1){
		$res = $row[$data];
		if($res == NULL) $res = $default_val;
	}
	else{
		$res = $default_val;
	}
	close_connection($conn);
	return $res;
	
}

echo init($_POST['id']);
?>
