<html>
    <body>
    <table style="width=100%;display:flex;justify-content:center;">
        <?php 

        include_once 'connection.php';

        $result = mysqli_query($conn,"select * from products;");
        while($res = mysqli_fetch_assoc($result)){
            echo "<tr >";
            echo "<td style=\"width:100px;font-size:40px;padding:20px; border:2px solid blue;\">".$res['car_Make']."</td>";
            echo "<td style=\"width:100px;font-size:40px;padding:20px; border:2px solid blue;\">".$res['car_Name']."</td>";
            echo "<td style=\"width:100px;font-size:40px;padding:20px; border:2px solid blue;\">".$res['prod_Year']."</td>";
            echo "<td style=\"width:100px;font-size:40px;padding:20px; border:2px solid blue;\">".$res['price']."</td>";
        }
        ?>

    </table>
    </body>
</html>