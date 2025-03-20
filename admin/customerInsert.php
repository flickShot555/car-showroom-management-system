<?php
    include_once "admin_connection.php"; 

    $usern= $_POST['username'];
    $ps= $_POST['password'];
    $contactno = $_POST['contactno'];
    $perm_add= $_POST['add'];
    $gender= $_POST['gender'];
    $terms =  $_POST['terms'];
    $terms2 =  $_POST['terms_2'];
    $terms3 =  $_POST['terms_3'];
    $finalterms = $terms.",".$terms2.",".$terms3;
    $details =  $_POST['carmake'];

    $query = mysqli_query($conn , "INSERT INTO `inventory`(`username`, `password`, `contact_number`, 
    `permanent_address`, `gender`, `checkboxes`, `details`) VALUES ('$usern','$ps','$contactno',
    '$perm_add','$gender','$finalterms','$details')");

    header("Location: admin.php")
?>