<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>menu</title>
    <style>
        button{
            font-size: 30px;
            font-weight:bolder;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0);
            color: #001F3F;
            border:none;
            border-radius: 10px;
            user-select:auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav style="flex-direction: row;
                flex: 1;
                position: top sticky; /* Lock the navbar at the top */
                z-index: 1000;
                display: flex;
                justify-content: space-around; /* Distribute space between <h1> and buttons */
                align-items: center; /* Vertically center the nav contents */
    
                padding: 30px 30px; /* Add padding to give space to the navbar */
                background-color: rgba(0, 0, 0, 0.1);
                border-bottom:#001F3F 10px solid;
                box-shadow: #000000 0px 0px 20px;"  
                >
        <h1 style="justify-content: flex-start; /* Align h1 to the left */
                    color:#FFFDD0;
                    padding-top: 30px;
                    padding-bottom: 30px;
                    padding-left: 200px;
                    padding-right: 200px;
                    background-color:#001F3F;
                    font-size:  60px;
                    font-family:'Playfair Display', serif;
                    border-radius: 25px;
                    box-shadow: #000000 0px 0px 40px;"
                >Aesthetic Cars</h1>

        <div class="nav-buttons" style="display: flex;
                                        flex:auto;
                                        justify-content: flex-end;
                                        gap: 15px">
            <button onclick="location.href='Home.php'">Home</button>
            <button onclick="location.href='About Us.php'">About Us</button>
            <button onclick="location.href='Contact us.php'">Contact Us</button>
            <button onclick="location.href='Sign in.php'">Signin</button>
            <button onclick="location.href='register.php'">Register</button>
        </div>
    </nav>
</body>
</html>