<?php

    session_start();

    if((!$_SESSION['font_family'])||(!$_SESSION['font_size'])){
        $font_family = "sans_serif";
        $font_size = "10";
        $_SESSION['font_family'] = $font_family;
        $_SESSION['font_size'] = $font_size;
    }else{
        $font_family = $_SESSION['font_family'];
        $font_size = $_SESSION['font_size'];
    }

?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Display Preferences</title>
		<style type="text/css">
			BODY, P, A {font-family:serif;
			font-size:10pt;font-weight:normal;}
			H1 {font-family:serif"; ?>;
			font-size:14pt;font-weight:bold;}
		</style>
	</head>
	<body>
		<h1>Set Your Display Preferences</h1>
		<form method="POST" action="session02.php">
			<p>Pick a Font Family:<br>
				<input type="radio" name="sel_font_family" value="serif"> serif
				<input type="radio" name="sel_font_family" value="sans-serif"
				checked> sans-serif
				<input type="radio" name="sel_font_family" value="Courier"> Courier
				<input type="radio" name="sel_font_family" value="Wingdings"> Wingdings
			</p>
			<p>Pick a Base Font Size:<br>
				<input type="radio" name="sel_font_size" value="8"> 8pt
				<input type="radio" name="sel_font_size" value="10" checked> 10pt
				<input type="radio" name="sel_font_size" value="12"> 12pt
				<input type="radio" name="sel_font_size" value="14"> 14pt
			</p>
			<P><input type="submit" name="submit" value="Set Display Preferences"></p>
		</form>
	</body>
</html>

