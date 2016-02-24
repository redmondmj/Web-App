<?php
    if (($_POST['val1'] == "") || ($_POST['val2']=="") || ($_POST['calc'] =="")){
        header("Location: 1calculate_form.html");
        exit;
    }

    if ($_POST['calc']=="add"){
        $result = $_POST['val1'] + $_POST['val2'];
    }else if ($_POST['calc'] == "subtract"){
        $result = $_POST['val1'] - $_POST['val2'];
    }else if ($_POST['calc'] == "multiply"){
        $result = $_POST['val1'] * $_POST['val2'];
    }else if ($_POST['calc'] == "divide"){
        $result = $_POST['val1'] / $_POST['val2'];
    }


?>
<!DOCTYPE html>
<html>
<head>
    <title>Boom I got ur numbers!</title>
</head>
<body>
    <p>Boom! I got your numbers: <?php echo "$result"; ?></p>
</body>
</html>

