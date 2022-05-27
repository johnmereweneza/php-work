<?php
include 'config.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
if (mysqli_query($conn, "INSERT INTO users VALUES('','$fname','$lname','$email','','$password')")) {
    header("location:../welcome.php");
}
?>