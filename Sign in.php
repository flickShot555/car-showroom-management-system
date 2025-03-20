<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin - Aesthetic Cars</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function sbmt(){
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if(username == "admin" && password == "admin"){
                alert("Login Successful");


                document.getElementById("username").value = "";
                document.getElementById("password").value = "";
            }else{
                alert("Invalid Username or Password");
            }
        }
    </script>
</head>
<body >
    
<?php include 'menu.php'; ?>
    

    

    <section>
    <div class="holder" >
        <div class="login">Login</div> <!-- Added a heading for the section -->
        <form action="" method="POST"> 
            <label for="username" class="labels">Username:</label>
            <input type="text" id="username" name="username" autofocus required><br><br>
            <label for="password" class="labels">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Login" onclick="sbmt()">
        </form>
    </div>
</section>
        

<?php include 'footer.php'; ?>

</body>
</html>
