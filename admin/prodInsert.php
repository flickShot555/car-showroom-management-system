<?php
    $id= $_POST['id'];
    $name = $_POST['name'];
    $make = $_POST['make'];
    $prodYear = $_POST['prodYear'];
    $price = $_POST['price'];

    include_once 'admin_connection.php';
    
    $mysql = mysqli_query($conn,"INSERT INTO products values('$id','$name','$make','$prodYear','$price')");
    header("Location: admin.php")
?>