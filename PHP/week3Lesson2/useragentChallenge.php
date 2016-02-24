<?php

    if ($_POST['submit']=="I Like PHP"){
        $result = 'PHP' ;
    }else if ($_POST['submit'] == "I Like JSP"){
        $result = 'JSP' ;
    }else if ($_POST['submit'] == "I Like ASP.NET"){
        $result = 'ASP.NET' ;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Choice</title>
</head>
<body>
    <p><?php
        echo "$result Eh? Nice. I see ";

        $agent = getenv("HTTP_USER_AGENT");
        echo "you are using $agent";
    ?>
    </p>
</body>
</html>

