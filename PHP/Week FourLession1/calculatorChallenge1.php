<!DOCTYPE html>
<html>
<head>
    <title>John's Awesome Calculator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
    <form method="post" action="calculatorChallenge.php">
        <h1>John's Awesome Calculator</h1>
        <p>
            Original Price: <input type="label" name="price">
        </p>
        <p>
            <input type="checkbox" name="NScustomer" />
            Nova Scotia Customer
        </p>
        <p>
        Age:
        <select name="age">
        <?php
            for($i = 1; $i <= 100; $i += 1){
                echo("<option value='{$i}'>{$i}</option>");
            }							
        ?>
        
        </select>
        </p>
        <p>
            <input type="checkbox" name="loyaltyDiscount" />
            Loyalty Discount
        </p>
        <p>
            <input type="submit" name="submit" value="Calculate">
        </p>
        
        
    </form>    
</body>
</html>

