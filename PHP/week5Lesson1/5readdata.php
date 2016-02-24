<?php
    $filename = "./files/txt/newfile.txt";
    //the @ symbol supresses errors for the function it is attached to
    $whattoread = @fopen($filename, "r") or die("Could not open file!");
    $file_contents = fread($whattoread, filesize($filename));
    $new_file_contents = nl2br($file_contents);
    $msg = "This is your content!: <br/>$new_file_contents";
    fclose($whattoread);

?>

<!DOCTYPE html>

<html>
	<head>
		<title>Reading Data From a File</title>
	</head>
	<body>
		<?php echo "$msg"; ?>
	</body>
</html>

