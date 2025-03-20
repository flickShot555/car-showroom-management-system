<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admincss.css">
    <title>customers</title>
</head>
<body>
    <?php include "banner.php"; ?>
    <?php include "admin_menu.php"; ?>
    <table style="border:2px solid black">
        <tr >
            <td style="border:2px solid black"><strong>ID</strong></td>
            <td style="border:2px solid black"><strong>Name</strong></td>
            <td style="border:2px solid black"><strong>Pasword</strong></td>
            <td style="border:2px solid black"><strong>Contact Number</strong></td>
            <td style="border:2px solid black"><strong>Permanent Address</strong></td>
            <td style="border:2px solid black"><strong>Gender</strong></td>
            <td style="border:2px solid black" colspan="2"><strong>Actions</strong></td>
        </tr>
        <?php 

        include_once 'admin_connection.php';

        $result = mysqli_query($conn,"select id,username,password,contact_number,permanent_address,gender from inventory;");
        while($res = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td style=\"border:2px solid black\">".$res['id']."</td>";
            echo "<td style=\"border:2px solid black\">".$res['username']."</td>";
            echo "<td style=\"border:2px solid black\">".$res['password']."</td>";
            echo "<td style=\"border:2px solid black\">".$res['contact_number']."</td>";
            echo "<td style=\"border:2px solid black\">".$res['permanent_address']."</td>";
            echo "<td style=\"border:2px solid black\">".$res['gender']."</td>";
            echo "<td style=\"border:2px solid black\"><a href=delete.php?id=$res[id]>Delete</a> </td>";
            echo "<td style=\"border:2px solid black\"><a href=edit.php?id=$res[id]>Edit</a></td>";
        }
        ?>

    </table>
</body>
</html>

<!--
15 tu 930-10
16 wed 1030-11
-->