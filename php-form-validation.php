<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Validation with PHP</title>
        <style>
            .error { color:red; }
        </style>
    </head>
    <body>
       <?php 
       function test_input($data)
        {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
        
        }
        $nameErr = $emailErr = $gendErr= "";
        $name = $gender = $comment = "";
        
        if(isset($_POST['submit'])){
        if (empty($_POST["name"]))
        {
	$nameErr = "Name is required";
        }
        else
        {
	$name = test_input($_POST["name"]);
        }
                
        if (empty($_POST["email"]))
        {
	$emailErr = "Email is required";
        }
        else
        {
	$email = test_input($_REQUEST["emai"]);
        }
        //
        if (empty($_POST["comment"]))
        {
	$emailErr = "comment  is required";
        }
        else
        {
	$comment = test_input($_REQUEST["comment"]);
        }
        //
        if (empty($_POST["gender"]))
        {
	$genderErr = "Email is required";
        }
        else
        {
	$gender = test_input($_REQUEST["gender"]);
        }
        }
        
        ?> 
        <h1>PHP Form Validation Example</h1>
        <p class="error">* required fields</p>
        
        <form action="" method="post">
            Name: <input type="text" name="name" value="<?php echo $nameErr; ?>">
            <span class="error"><?php echo $nameErr; ?>*</span><br><br>
            
            Email: <input type="text" name="email" value="<?php echo $emailErr; ?>">
            <span class="error">*<?php echo $emailErr; ?></span><br><br>
            
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br><?php echo $comment; ?>
            
            Gender:
            <input type="radio" name="gender" value="Female"<?php if($gender="Female") echo 'checked'; ?>> Female
            <input type="radio" name="gender" value="Male"<?php if($gender="Male") echo 'checked'; ?>> Male
            <span class="error">*<?php echo $genderErr; ?></span><br><br>
            
            <input type="submit" value="Submit" name="submit">
        </form>
        <?php
        
        if(isset($_REQUEST["submit"])) {
            echo "<p> Name : $name ";   
            echo "<p> Email : $email";
            echo "<p> Gender : $gender";
        }
                  
            
        ?>
        
    </body>
</html>
