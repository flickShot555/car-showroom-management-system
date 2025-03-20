<html>
    <body>
        <?php 
        include "banner.php";
        include "admin_menu.php";
        ?>

        <div style="display:flex;align-self:center;">
        <form action="customerInsert.php" method="POST" > 
            <!--label for="username" class="labels">Username:</label-->
            <input type="text" id="username" name="username" placeholder="username" autofocus required style="width: 90%;height: 20px"><br><br>
            <!--label for="password" class="labels">Password:</label-->
            <input type="password" id="password" name="password" placeholder="password" required  style="width: 90%;height: 20px"><br><br>

            <input type="text" id="contactno" name="contactno" placeholder="Contact Number" required  style="width: 90%;height: 20px"><br><br>


            <input type="text" id="add" name="add" placeholder="Permanent Address" required  style="width: 90%;height: 20px"><br><br>

            <input type="radio" id="gender" name="gender" value="Male"> 
            <label for="gendermale" class="labels">Male</label>

            <input type="radio" id="gender" name="gender" value="female"> 
            <label for="genderfemale" class="labels">Female</label><br><br>

            <input type="checkbox"  id="make" name="terms" value="terms"><label for="docs" class="labels">  Original Documents Available</label><br><br>

            <input type="checkbox"  id="make_2" name="terms_2" value="terms_2"><label for="docs" class="labels">  All Customs Cleared</label><br><br>
            <input type="checkbox"  id="make_3" name="terms_3" value="terms_3"><label for="docs" class="labels">  Any major legal issue</label><br><br>


            <textarea id="carmake" name="carmake" class='carmake' placeholder="Car Make, Model, Varient" required rows="5" cols="10" ></textarea><br><br>



            

            <input type="submit" value="Register">
        </form>
        </div>
    </body>
</html>