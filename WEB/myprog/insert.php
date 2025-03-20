<?php

include_once("connect.php");	
$name = $_POST['name'];
$age = $_POST['age'];
$email =$_POST['email'];

$result = mysqli_query($conn, "INSERT INTO users(name,age,email) VALUES ('$name','$age','$email')");

header("Location: admin.php")
?>


