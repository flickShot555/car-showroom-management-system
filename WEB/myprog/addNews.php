
<html>
    <head>
        <title>Basic HTML Layout using Div</title>
    </head>
    <body>
        <div style="width:99%; border:3px solid black;">
            <div style= "text-align:center;height:100px;border:3px solid black;">
              Banner 
            </div>
            <div style=" height:400px; width:19%; float:left;border:4px solid black;text-align: center;">
                <h2>Main Menu</h2>
             <?PHP include_once("adminMenu.php");?>
                

            </div>
            <div style="height:400px; width:80%; float:left;">
               


<form action="insert.php" method="POST">
<br><br><br><br>
  Name: <input type="text" name="name">
  <br><br><br><br><br>
   Age:<input type="text" name="age">
  <br><br><br><br><br>
  
  Email:<input type="text" name="email">
  <br><br><br><br><br>
  <input type="submit" value="Submit">
</form>


























            </div>
            <div style="clear:both; height:80px;border:4px solid black;">
                <center>
                    
                </center>
            </div>
        </div>
    </body>
</html>
