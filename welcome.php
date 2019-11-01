<!DOCTYPE html>
<!--
Anmol Desai
Student ID:991515637
SYST10199 - Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
            //print_r($_POST);
            $name =$_POST["name"];
            $age = $_POST["age"];
            $num = $_POST["num"];
            $a = $age + $num;
            $gender = $_REQUEST['gender'];
            $colors = $_REQUEST['color'];

            

            //validating name
            if (empty($name))
		echo "Name field is required<br>";
            // check length of text in name field
	else if (strlen($name) <= 3)
		echo "Name must be at least 3 chars long<br>";
	else
		echo "Welcome $name <br>";
        
            //validating gender
        if (empty($gender))
		echo "Please select your gender<br><br>";
	else
		echo "Gender: $gender<br><br>";

            //validating age
        if(empty($age))
            echo "Please Enter age  <br><br>";
        else
            echo "AGE = $age<br><br>";
        
        //validating checkboxes
        
        if (empty($colors))
		echo "Please select your favorite colors<br>";
	else
	{
		echo "Favorite Colors: ";
		foreach($colors as $i)
			echo $i . " ";
	}

        
        
            


        ?>
    </body>
</html>
