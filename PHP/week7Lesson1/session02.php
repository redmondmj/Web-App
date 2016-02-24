<?php
    session_start();
    if (($_POST['sel_font_family'])&&($_POST['sel_font_family'])){
        $font_family = $_POST['sel_font_family'];
        $font_size = $_POST['sel_font_size'];
        $_SESSION['font_family'] = $font_family;
        $_SESSION['font_size'] = $font_size;
    }elseif(((!$_POST['sel_font_family'])&&(!$_POST['sel_font_size'])) && (($_SESSION['sel_font_family'])&&($_SESSION['sel_font_size']))){
        $font_family = $_SESSION['font_family'];
        $font_size = $_SESSION['font_size'];
        $_SESSION['font_family'] = $font_family;
        $_SESSION['font_size'] = $font_size;
    }else{
        $font_family = "san_serif";
        $font_size = "10";
        $_SESSION['font_family'] = $font_family;
        $_SESSION['font_size'] = $font_size;
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Display Preferences</title>
		<style type="text/css">
			BODY, P, A {font-family:<?php echo "$font_family"; ?>;
				 font-size:<?php echo "$font_size"; ?>pt;font-weight:normal;}
			H1 {font-family:<?php echo "$font_family"; ?>;
				 font-size:<?php echo $font_size + 4; ?>pt;font-weight:bold;}
		</style>
	</head>
	<body>
		<h1>Your Preferences Have Been Set</h1>
		<p>As you can see, your selected font family is now <?php echo "$font_family";
			 ?>, with a base size of <?php echo "$font_size" ?> pt.</p>
		<p>Please feel free to <a href="session01.php">change your preferences</a>
			   again.</p>
	</body>
</html>

