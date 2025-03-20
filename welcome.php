<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Aesthetic Cars</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function sbmt() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            let gender = document.getElementById('gender').value;
            let number = document.getElementById('contactno').value;
            let address = document.getElementById('add').value;
            if (username == "admin" && password == "admin") {
                alert("Login Successful");


                document.getElementById("username").value = "";
                document.getElementById("password").value = "";
            } else {
                alert("Invalid Username or Password");
            }
        }
    </script>
</head>

<body>

    <?php include 'menu.php'; ?>


    <section>
        <div class="register">

            <div class="login">Welcome <?php echo $_POST['username'] ?></div>
            <br>
            <table>
                <tr>
                    <td>Username</td>
                    <td>password</td>
                    <td>contactno</td>
                    <td>address</td>
                    <td>gender</td>
                    <td>terms</td>
                    <td>terms_2</td>
                    <td>terms_3</td>
                    <td>carmake</td>
                </tr>
                <tr>
                    <td><?php echo $_POST['username'] ?></td>
                    <td><?php echo $_POST['password'] ?></td>
                    <td><?php echo $_POST['contactno'] ?></td>
                    <td><?php echo $_POST['add'] ?></td>
                    <td><?php echo $_POST['gender'] ?></td>
                    <td><?php echo $_POST['terms'] ?></td>
                    <td><?php echo $_POST['terms_2'] ?></td>
                    <td><?php echo $_POST['terms_3'] ?></td>
                    <td><?php echo $_POST['carmake'] ?></td>
                </tr>
            </table>

        </div>
    </section>

    <?php

    include_once "connection.php";

    $usern = $_POST['username'];
    $ps = $_POST['password'];
    $contactno = $_POST['contactno'];
    $perm_add = $_POST['add'];
    $gender = $_POST['gender'];
    $terms = $_POST['terms'];
    $terms2 = $_POST['terms_2'];
    $terms3 = $_POST['terms_3'];
    $details = $_POST['carmake'];

    $query = mysqli_query($conn, "INSERT INTO `inventory`(`username`, `password`, `contact_number`, 
    `permanent_address`, `gender`, `checkboxes`, `details`) VALUES ('$usern','$ps','$contactno',
    '$perm_add','$gender','$terms.\" \".$terms2.\" \".$terms3','$details')");



    ?>




    <?php include 'footer.php'; ?>

</body>

</html>