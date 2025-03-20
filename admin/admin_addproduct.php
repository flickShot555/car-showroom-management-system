<html>
    <body>
        <?php include ("banner.php");
        include ("admin_menu.php");?>
        <div style="display:flex; align-self:center">
        <form action="prodInsert.php" method="POST">
            <input type = "text" id = "id" name = "id" placeholder ="Enter Car ID"style="height:20px;border-radius:5px">
            <br><br><br>
            <input type = "text" id = "name" name = "name" placeholder = "Enter Car name" style="height:20px;border-radius:5px;" autofocus>
            <br><br><br>
            <input type = "text" id = "make" name = "make" placeholder = "Enter Car make" style="height:20px;border-radius:5px;">
            <br><br><br>
            <input type = "date" id = "prodYear" name = "prodYear" style="height:20px;border-radius:5px;">
            <br><br><br>
            <input type = "text" id = "price" name = "price" placeholder ="Enter Car Price"style="height:20px;border-radius:5px">
            <br><br><br>
            <button type="submit">Enter</button>

        </form>
        </div>
    </body>
</html>