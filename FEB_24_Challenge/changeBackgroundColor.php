<?php
session_start();

if(isset($_POST['colourset'])) {
$colour = $_POST['colourset'];
$_SESSION['colourset'] = $colour;
}

$colour_session = $_SESSION['colourset'];
echo "bgcolour = $colour_session";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Background Challenge</title>
        <meta charset="UTF-8">
    </head>

    <body bgcolor='#<?php echo $colour_session; ?>'>
        <form id="form1" name="form1" method="post" action="changeBackgroundColor.php">
            <input name="colourset" placeholder="Color Hex"/>
            <input type="submit" value="Change Color">
        </form>
    </body>
<html>
