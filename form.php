
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
    
    <nav>
        <h1>Aesthetic Cars</h1>

        <div class="nav-buttons">
            <button onclick="location.href='Home.php'">Home</button>
            <button onclick="location.href='About Us.php'">About Us</button>
            <button onclick="location.href='Contact us.php'">Contact Us</button>
            <button onclick="location.href='Sign in.php'">Signin</button>
        </div>
    </nav>
    

    

    <section>
    <div class="holder" >
        <div class="login">Login</div> <!-- Added a heading for the section -->
        <form action="Process.php" method="GET"> 
            <label for="username" class="labels">Username:</label>
            <input type="text" id="username" name="username" autofocus required><br><br>

            <label for="password" class="labels">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </form>
    </div>
</section>
        

    <footer >
        <p>&copy; 2024 Aesthetic Cars. Visit our <a href="Contact us.php" >Contact Us</a> page for more info.</p>
    </footer>

</body>
</html>
