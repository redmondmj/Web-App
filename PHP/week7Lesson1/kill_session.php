<?php
    // Begin the session
    session_start();

    // Unset all of the session variables.
    session_unset();

    // Destroy the session.
    session_destroy();
    unset($_COOKIE['PHPSESSID']);
    setcookie("PHPSESSID", "", time()-3600, "/");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kill Session</title>
    </head>

    <body>
        <h1>Boom I killed your session!</h1>
    </body>
</html>
