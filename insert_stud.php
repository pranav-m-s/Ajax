<?php

	 


	include "conn.php";

 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$branch = $_POST['branch'];

													// $password = password_hash($password, PASSWORD_BCRYPT);
	

	$query = "INSERT INTO `student`(`student-name`,`student-email`,`student-address`,`student-branch`) VALUES(  '$name','$email','$address','$branch')";
	$result = mysqli_query($con,$query);

	if($result){
		echo "successfully inserted";
	}
	else{
		echo "failed to insert";
	}
?>