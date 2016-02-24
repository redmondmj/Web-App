<?php
    $filename = "./files/txt/newfile.txt";
    if (file_exists($filename)){
        $msg = "<p>File already exists, dummy.</p>";
    }else {
        // fopen creates a file. It requires parameters - http://php.net/manual/en/function.fopen.php
        $newfile = fopen($filename, "w+") or die("Could not create file");
        fclose($newfile);
        $msg = "<p>File Created!</p>";
    }
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Creating a New File</title>
	</head>
	<body>
		<?php echo "$msg"; ?>
	</body>
</html>

