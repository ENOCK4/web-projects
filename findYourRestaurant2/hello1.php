<?php
$connect= mysqli_connect("localhost", "root","","course_web");
$db_select = mysqli_select_db($connect, "course_web");
	$uname = $_POST['uname'];
	
	$email = $_POST['email'];
	$uloc = $_POST['uloc'];
	$umessage = $_POST['umessage'];

//if($connect){
	//echo "Successfully connected to the database";
//} else{
//	die('error');
//}
$query="INSERT INTO order_now(Full_name,Email,Location,Message) VALUES('$uname', '$email','$uloc','$umessage')";
$result = mysqli_query($connect,$query);


if(!mysqli_query($connect,$query)) 
{
    die('Error: ' . mysqli_error($connect));
}

else
{

    echo '<script language="javascript">';
    echo 'alert("your order has been received"); location.href="jose.html"';
    echo '</script>';
}       

?>