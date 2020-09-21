<?php

session_start();
$con = mysqli_connect('localhost','root','123456');

if(!$con) {
	echo 'Not connected to server';
} 
if(!mysqli_select_db($con,'booklist')) {
	echo 'Database not selected';
}

$bookname = $_POST['bookname'];
$bookauthor = $_POST['bookauthor'];
$bookpagecount = $_POST['bookpagecount'];
$bookgenre = $_POST['bookgenre'];
$owneremail = $_POST['owneremail'];

$sql = "INSERT INTO booklist(bookname, bookauthor, bookpagecount, bookgenre, owneremail) VALUES ('$bookname','$bookauthor','$bookpagecount','$bookgenre','$owneremail')";

if(!mysqli_query($con,$sql)) {
	echo 'Not Inserted';
}else {
	echo 'Inserted';
}

header('location:addition_successful.php');