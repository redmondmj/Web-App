<?php
	$filename = "./files/txt/newfile.txt";
    $whattoread = @fopen($filename, "r") or die ("Unable to open.");
    $file_contents = fread($whattoread, filesize($filename)) or die ("Unable to get file to read.");
    $to = "matt@nscctruro.ca";
    $subject = "File info!";
    $mailheaders = "From: My Web Site <matt@nscctruro.ca> /n";
    mail($to, $subject, $file_contents, $mailheaders);
    $msg = "Check your mail";
    fclose($whattoread);
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Mailing Data From a File</title>
	</head>
	<body>
		<?php echo "$msg"; ?>
	</body>
</html>

