<!DOCTYPE html>
<html>
	<head>
		<title>Assignment Operators</title>
	</head>
	<body>
		<?php
            $origVar = 100;
            echo "<p>Original Value: $origVar</p>";
            $origVar += 25;
            echo "<p>Added Value: $origVar</p>";
            $origVar -= 12;
            echo "<p>Subtracted Value: $origVar</p>";
            $origVar .= " chickens";
            echo "<p>Final Value: $origVar</p>";

        ?>
	</body>
</html>