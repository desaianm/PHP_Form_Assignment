<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <title>Product Discount Calculator</title>
        <link rel="stylesheet" href="_css/styles.css">
    </head>
    <body>
        <?php
        
            $prodes = $_REQUEST["prod_desc"];
            $listprice = $_REQUEST["list_price"];
            $discountpercent =  $_REQUEST["discount_percent"];
            $discountedamount = $listprice * $discountpercent/100;
            $final_price = $listprice - $discountedamount;
        ?>
        
        <div id="content">
			<h1>Product Discount Calculator</h1>
            <label>Product Description:</label>
            <span><?php echo $prodes;
                    ?></span>
            <br>

            <label>List Price:</label>
            <span><?php echo  "$".number_format($listprice,2);  ?></span>
            <br>

            <label>Standard Discount:</label>
            <span><?php echo  "$".number_format($discountpercent,2)."%";  ?></span>
            <br>

            <label>Discount Amount:</label>
            <span><?php echo "$".number_format($discountedamount,2); ?></span>
            <br>

            <label>Discount Price:</label>
            <span><?php echo $final_price  ?></span>
            <br>
        </div>
    </body>
</html>
