<?php 
	$host="localhost:3307";
	$name="root";
	$pwd='';
	$db="ajaxSelect";
	$connect=mysqli_connect($host,$name,$pwd,$db);
	if($connect==false){
		echo "Error".mysqli_error($connect);
	}
?>