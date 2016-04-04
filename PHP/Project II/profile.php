<?php
    include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Menu</title>
        <b id="logout"><a href="logout.php">Log Out</a></b>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body class="col-xs-offset-1 col-xs-10">
        <h1>Welcome, <?php echo $login_session; ?></h1>
        <b id="welcome"><i>Client Data Management System (CDMS)</i></b>
        <p><strong>My Clients</strong></p>
        
        <!-- this is where the client table will go -->
        
        <b id="add"><a href="show_addrecord.php">Add a Record</a></b>
    </body>
</html>
