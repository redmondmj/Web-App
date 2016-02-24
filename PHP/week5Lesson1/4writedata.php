<?php
    $filename = "./files/txt/newfile.txt";
    $newString = "Check it out !\n
                  I've added some stuff and things!";
    $myfile = fopen($filename, "w+") or die("could not open file!");
    fwrite($myfile, $newString) or die ("Unable to write to file!");
    $msg = "<p>File has data in it now.</p>";
    fclose($myfile);
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Adding Data to a File</title>
	</head>
	<body>
		<?php echo "$msg"; ?>
	</body>
</html>

