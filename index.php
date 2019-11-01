<!DOCTYPE html>
<!--
Anmol Desai
Student ID:991515637
SYST10199 - Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> PHP_Forms</title>
    </head>
    <body>
        <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br><br>
	Age: <input type="text" name="age"><br><br>
<!--        Enter Integer <input type="number" name="num"><br><br>-->
        <input type="radio" name="gender" value="Female"> Female<br><br>
        <input type="radio" name="gender" value="Male"> Male<br><br>
        <input type="checkbox" name="color[]" value="Red"> Red <br>
        <input type="checkbox" name="color[]" value="Blue"> Blue <br>
        <input type="checkbox" name="color[]" value="Green"> Green <br>
        <input type="checkbox" name="color[]" value="Yellow"> Yellow <br>
        
        <select name="cars">
	<option value="-1">Select a car</option>
	<option value="Honda">Honda</option>
	<option value="Mazda">Mazda</option>
	<option value="Toyota">Toyota</option>
	<option value="Nissan">Nissan</option>
        </select>


        
	<input type="submit" value="Submit"><br><br>
        </form>

        <?php
        
        
        ?>
    </body>
</html>
