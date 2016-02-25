<?php
    include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Menu</title>
        <b id="logout"><a href="logout.php">Log Out</a></b>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>My Menu</h1>
        <b id="welcome"><i><?php echo $login_session; ?>'s Music Data System</i></b>
        <p><strong>My Music</strong></p>
        <ul>
            <li><a href="sel_byid.php">ordered by ID</a></li>
            <li><a href="sel_bydateacq.php">ordered by date acquired</a></li>
            <li><a href="sel_bytitle.php">ordered by title</a></li>
            <li><a href="sel_byartist.php">ordered by artist</a></li>
        </ul>

        <b id="add"><a href="show_addrecord.php">Add a Record</a></b>
    </body>
</html>
