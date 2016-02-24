<?php
    if ($_POST['location']==""){
        header("Location: 6redirect_form.html");
        exit;
    }else {
        header("Location: $_POST[location]");
    }
?>

