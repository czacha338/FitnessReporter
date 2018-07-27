<?php
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

function web_alert($data){
	echo '<script>';
	echo 'alert('. json_encode( $data ) .')';
	echo '</script>';
} 
?>