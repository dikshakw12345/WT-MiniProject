<?php

$connection = mysqli_connect('localhost:3306','root','','website');

mysqli_select_db($connection,"website");

$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$clgname = $_POST['clgname'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfo`(`user`,`email`,`phone`,`clgname`,`message`) VALUES ('$user','$email','$phone','$clgname','$message') ";

mysqli_query($connection,$query);

echo '<script>alert("Your details have been submitted and you will receive updates as soon as possible.")</script>';

?>