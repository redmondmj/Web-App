<?php
    if (($_POST['text1']=="")||($_POST['func']=="")){
        header("Location: 3generic_form.html");
        exit;
    }

    $result = $_POST['func']($_POST['text1']);
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Generic Input Results</title>
    </head>
    <body>
        <?php echo "$result"; ?>
        <p><a href="generic_form.html">Go again!</a></p>
    </body>
</html>

