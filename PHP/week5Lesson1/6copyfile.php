<?php
    $orig_filename = "./files/txt/newfile.txt";
    $new_filename = "./files/txt/reallydifferent.txt";
    $success = @copy($orig_filename, $new_filename) or die("Couldn't copy. I am a failure.");
    if($success){
        $msg = "Copied $orig_filename to $new_filename";
    }else{
        $msg = "Could not Copy file.";
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Copy a File</title>
	</head>
	<body>
		<?php echo "$msg"; ?>
	</body>
</html>

