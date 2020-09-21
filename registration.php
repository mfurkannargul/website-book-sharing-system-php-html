<?php

session_start();
$con = mysqli_connect('localhost','root','123456');
mysqli_select_db($con, 'users');

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['user'];
$password = $_POST['password'];
$password1 = $_POST['password1'];

if($password == $password1) {

$s = " select * from users where email = '$email'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	header('location:register_error.php');
} else {
	$passwordmd5 = md5($password);
	$reg = " insert into users(name, surname, email, password) values ('$name', '$surname','$email', '$passwordmd5')";
	mysqli_query($con, $reg);
	header('location:registeration_successful.php');
}
} else {
	header('location:confirmation_error.php');
}



?>