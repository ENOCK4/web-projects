<?php
$connect= mysqli_connect("localhost", "root","","course_web");
$db_select = mysqli_select_db($connect, "course_web");
	$email = $_POST['email'];
	$text = $_POST['text'];

//if($connect){
	//echo "Successfully connected to the database";
//} else{
//	die('error');
//}
$query="INSERT INTO restuarant_table(Email,Message) VALUES('$email', '$text')";
$result = mysqli_query($connect,$query);

?>