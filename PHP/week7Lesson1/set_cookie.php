<?php
	$cookie_name = "test_cookie";
    $cookie_value = "test_string";
    $cookie_expire = time()+86400;
    setcookie($cookie_name, $cookie_value, $cookie_expire, "/");

	/* Common Times - number of seconds since January 1, 1970
	time()+60 One minute from the current time
	time()+900 15 minutes from the current time
	time()+1800 30 minutes from the current time
	time()+3600 One hour from the current time
	time()+14400 Four hours from the current time
	time()+43200 12 hours from the current time
	time()+86400 24 hours from the current time
	time()+259200 Three days from the current time
	time()+604800 One week from the current time
	time()+2592000 30 days from the current time
	*/
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Set Test Cookie</title>
	</head>
	<body>


        <p><strong>Note:</strong> You might have to relaod the page to see the value of the cookie.</p>
	</body>
</html>
