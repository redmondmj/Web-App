<?php
    if ($_POST['submit']=="Calculate"){
        if (isset($_POST['NScustomer'])){
            $result = $_POST['price'] + ($_POST['price']*.2);
        }else{
            $result = $_POST['price'] + ($_POST['price']*.15);
        }
        
        if ($_POST['age']>65){
            $result = $result - ($_POST['price']*.05);
        }
        
        if ($_POST['age']<12){
            $result = $result - ($_POST['price']*.1);
        }
        
        if (isset($_POST['loyaltyDiscount'])){
            $result = $result - ($_POST['price']*.02);
        }
        
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Answer</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <p>
            <?php 
                echo "Total Cost: $result";
            ?>
        </p>
    <p>
    <?php
    $ip = getenv('HTTP_CLIENT_IP')?:
    getenv('HTTP_X_FORWARDED_FOR')?:
    getenv('HTTP_X_FORWARDED')?:
    getenv('HTTP_FORWARDED_FOR')?:
    getenv('HTTP_FORWARDED')?:
    getenv('REMOTE_ADDR');
    echo "$ip";
    ?>
    </p>
</body>
</html>

        