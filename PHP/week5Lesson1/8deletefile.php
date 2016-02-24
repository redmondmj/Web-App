<?php
    $filename = "./files/txt/reallydifferent.txt";
    $success = @unlink($filename) or die("Couldn't delete. I am a failure.");
    if($success){
        $msg = "Deleted $filename";
    }else{
        $msg = "Could not Rename file.";
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Delete a File</title>
	</head>
	<body>
		<?php echo "$msg"; ?>
	</body>
</html>

