<?php

session_start ();
include("admin_connection.php"); 

if(isset($_REQUEST['sub']))
{
$a = $_REQUEST['username'];
$b = $_REQUEST['password'];

$res = mysqli_query($conn,"SELECT * from inventory where username='$a'and password='$b'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location:admin.php");
}
else	
{
	header("location:adminlogin.php?err=1");
	
}
}
?>
