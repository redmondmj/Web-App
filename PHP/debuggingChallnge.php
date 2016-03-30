<?php
// Hey Frank,
// There are 4 bugs, but they are all in the script, the HTML is fine
$cookie_name = "colourhex";
$count_name = "count";
$message = "Okay, now get back to work.";

if (isset($_POST["submit"])){
$cookie_value = $_GET['colourset'];
if (isset($_COOKIE[$count_name])){
$cookie_count = $_COOKIE[$count_name]-1;
}else{
$cookie_count = 3;
}
}
else if(isset($_COOKIE[$cookie_name])) {
$cookie_text = $_cookie[$cookie_name];
$cookie_count = 3;
}else{
$cookie_value="FFFFFF"
$cookie_count = 3;
}

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($count_name, $cookie_count, time() + (86400 * 30), "/"); // 86400 = 1 day

?>

<!DOCTYPE html>
<html>
<head>
<title>Background Challenge</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
body { background: <?php echo "#".$cookie_value ?> !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
</head>

<body>
<form class="well mywell col-sm-8 col-sm-offset-2" id="form1" name="form1" method="post" action="changeBackgroundColor.php">
<div class="h4">
<?php if($cookie_count!=0){echo $cookie_count . " changes left.";}else{echo $message;} ?><br/>
</div>
<div class="col-xs-8">
<input class="form-control" name="colourset" placeholder="Color Hex"/>
</div>
<input <?php if ($cookie_count == 0){ ?> disabled <?php } ?> type="submit" class="btn btn-danger col-xs-4" name="submit" value="Change Color">

</form>
</body>
<html>
