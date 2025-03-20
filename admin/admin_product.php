<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admincss.css">
    <title>Document</title>
</head>
<body>
    <?php include "banner.php"; ?>
    <?php include "admin_menu.php"; ?>
    <table style="border:2px solid black;width:85%;left-margin:5px;">
        <tr >
            <td style="border:2px solid black"><strong>Car ID</strong></td>
            <td style="border:2px solid black"><strong>Car Name</strong></td>
            <td style="border:2px solid black"><strong>Car Make</strong></td>
            <td style="border:2px solid black"><strong>Production Year</strong></td>
            <td style="border:2px solid black"><strong>Car Price</strong></td>
            <td style="border:2px solid black" colspan="2"><strong>Actions</strong></td>
            <!--td style="border:2px solid black"><strong>Contact Number</strong></!--td>
            <td style="border:2px solid black"><strong>Permanent Address</strong></td>
            <td-- style="border:2px solid black"><strong>Gender</strong></td-->
        </tr>
        <?php 

        include_once 'admin_connection.php';

        $result = mysqli_query($conn,"select * from products;");
        while($res = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td style=\"border:2px solid black\">".$res['car_ID']."</td>";
            echo "<td style=\"border:2px solid black\">".$res['car_Name']."</td>";
            echo "<td style=\"border:2px solid black\">".$res['car_Make']."</td>";
            echo "<td style=\"border:2px solid black\">".$res['prod_Year']."</td>";
            echo "<td style=\"border:2px solid black\">".$res['price']."</td>";
            echo "<td style=\"border:2px solid black\"><a href=delete.php?id=$res[car_ID]>Delete</a> </td>";
            echo "<td style=\"border:2px solid black\"><a href=edit.php?id=$res[car_ID]>Edit</a></td>";
            /*echo "<td style=\"border:2px solid black\">".$res['contact_number']."</td>";
            echo "<td style=\"border:2px solid black\">".$res['permanent_address']."</td>";
            echo "<td style=\"border:2px solid black\">".$res['gender']."</td>";*/
        }


        
        
        ?>

    </table>
</body>
</html>