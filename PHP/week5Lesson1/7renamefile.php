<?php
    $orig_filename = "./files/txt/newfile.txt";
    $new_filename = "./files/txt/renamed.txt";
    $success = @rename($orig_filename, $new_filename) or die("Couldn't rename. I am a failure.");
    if($success){
        $msg = "Renamed $orig_filename to $new_filename";
    }else{
        $msg = "Could not Rename file.";
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Rename a File</title>
	</head>
	<body>
		<?php echo "$msg"; ?>
	</body>
</html>


