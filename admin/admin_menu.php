<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admincss.css">
    <title>menu</title>
</head>
<body>
    <div style="background-color: #028aa1;
                padding: 10px;
                margin-bottom: 10px;
                display: flex;
                flex-direction: column;
                float: left;">
        
            <a style="padding: 10px;
                        font-size: 20px; 
                        margin-bottom: 5px solid rgb(255, 255, 255);"
                 href="admin.php">Home</a>
                 
            <p>Customers  [<a style="padding: 10px;
                        font-size: 20px; 
                        margin-bottom: 5px solid rgb(255, 255, 255);"
                 href="admin_customer.php">view</a> | 
                 <a style="padding: 10px;
                        font-size: 20px;
                        margin-bottom: 5px solid rgb(255, 255, 255);"
                 href="admin_addcustomer.php">add</a>]</p>

            <p>Products  [<a style="padding: 10px;
                        font-size: 20px; 
                        margin-bottom: 5px solid rgb(255, 255, 255);"
                 href="admin_product.php">view</a> | 
                 <a style="padding: 10px;
                        font-size: 20px;
                        margin-bottom: 5px solid rgb(255, 255, 255);"
                 href="admin_addproduct.php">add</a>]</p>
              <a href="adminlogout.php"><h2><font color="red">Logout</font></h2>
    </div>
</body>
</html>