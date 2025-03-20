<?php
$id = $_GET['id'];

$query = "delete * from products where car_ID = $id";
if($query){
    header("location:admin_customer.php");
}
?>