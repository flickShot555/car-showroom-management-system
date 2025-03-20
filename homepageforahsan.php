<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesthetic Cars</title>
    <link rel="stylesheet" href="style.css">
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


    <section id="mian" class="main">
        <aside>
            <a href="#Honda"><button class="side_buttons" >Honda</button></a>
            <a href="#Toyota"><button class="side_buttons" >Toyota</button></a>
            <a href="#Kia"><button class="side_buttons" >Kia</button></a>
            <a href="#Hyundai"><button class="side_buttons">Hyundai</button></a>
        </aside>
    
        <section class="section_holder">

            <section id="Honda">
                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/honda/honda accord.jfif"> 
                    </div> 
                    <div class="content">
                        Honda Accord
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/honda/honda civic.jfif"> 
                    </div> 
                    <div class="content">
                        Honda Civic
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/honda/honda city.jfif"> 
                    </div> 
                    <div class="content">
                        Honda City
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/honda/honda insight.jpg"> 
                    </div> 
                    <div class="content">
                        Honda Insight
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/honda/honda vezel.jpg"> 
                    </div> 
                    <div class="content">
                        Honda Vezel
                        
                    </div> 
                </div>
            </section>

            <section id="Toyota">
                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/toyota/camry.jfif"> 
                    </div> 
                    <div class="content">
                        Toyota Camry
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/toyota/century.jfif"> 
                    </div> 
                    <div class="content">
                        Toyota Century
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/toyota/corolla.jfif"> 
                    </div> 
                    <div class="content">
                        toyota Corolla
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/toyota/crown.jfif"> 
                    </div> 
                    <div class="content">
                        toyota Crown
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/toyota/hilux.jfif"> 
                    </div> 
                    <div class="content">
                        toyota Hilux
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/toyota/yaris.jfif"> 
                    </div> 
                    <div class="content">
                        toyota yaris
                        
                    </div> 
                </div>
            </section>

            <section id="Kia">
                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/kia/karnival.jfif"> 
                    </div> 
                    <div class="content">
                        Kia Karnival
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/kia/sorento.jpg"> 
                    </div> 
                    <div class="content">
                        Kia Sorento
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/kia/sportage.jfif"> 
                    </div> 
                    <div class="content">
                        Kia Sportage
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/kia/stonic.jpg"> 
                    </div> 
                    <div class="content">
                        Kia Stonic
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/kia/picanto.jfif"> 
                    </div> 
                    <div class="content">
                        Kia Picanto
                        
                    </div> 
                </div>
            </section>

            <section id="Hyundai">
                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/hyundai/santa fre.jfif"> 
                    </div> 
                    <div class="content">
                        Hyundai Santa Fe
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/hyundai/santa cruz.jfif"> 
                    </div> 
                    <div class="content">
                        Hyundai Santa Cruz
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/hyundai/tucson.jfif"> 
                    </div> 
                    <div class="content">
                        Hyundai Tucson
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/hyundai/sonata.jfif"> 
                    </div> 
                    <div class="content">
                        Hyundai Sonata
                        
                    </div> 
                </div>

                <div class="card">
                    <div class="image-box"> 
                        <img src="Assets/hyundai/elantra.jfif"> 
                    </div> 
                    <div class="content">
                        Hyundai Elantra
                        
                    </div> 
                </div>
            </section>
        </section>
    </section>  

    <br>
    <table style="width=100%;display:flex;justify-content:center;border:2px solid blue;background-color:">
        <?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "carshowroom";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

        $result = mysqli_query($conn,"select * from products;");
        while($res = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td style=\"width:100px;font-size:20;\">".$res['car_Make']."</td>";
            echo "<td style=\"width:100px;font-size:20;\">".$res['car_Name']."</td>";
            echo "<td style=\"width:100px;font-size:20;\">".$res['prod_Year']."</td>";
            echo "<td style=\"width:100px;font-size:20;\">".$res['price']."</td>";
        }
        ?>

    </table>
    <br>
    <footer>
        <p>&copy; 2024 Aesthetic Cars. Visit our <a href="Contact us.php" >Contact Us</a> page for more info.</p>
    </footer>

</body>
</html>
