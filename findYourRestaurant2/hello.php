<?php
$connect= mysqli_connect("localhost", "root","","course_web");
$db_select = mysqli_select_db($connect, "course_web");
	$email = $_POST['email'];
	$message = $_POST['message'];

//if($connect){
	//echo "Successfully connected to the database";
//} else{
//	die('error');
//}
$query="INSERT INTO home_db(Email,Message) VALUES('$email', '$message')";
$result = mysqli_query($connect,$query);

?>