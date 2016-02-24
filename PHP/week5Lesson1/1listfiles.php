<?php
    $dir_name = "/Windows";
    $dir = opendir($dir_name);
    $file_list = "<ul>";
    while ($file_name = readdir($dir)){
        if(($file_name != ".")&&($file_name != ".."))
        $file_list .= "<li>$file_name</li>";
    }
    $file_list .= "</ul>";
    closedir($dir);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Directory Listing</title>
	</head>
	<body>
		<p>Files in: <?php echo "$dir_name"; ?></p>
		<?php echo "$file_list"; ?>
	</body>
</html>

