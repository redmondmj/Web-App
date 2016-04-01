<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="style.css" rel="stylesheet" type="text/css">   
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
    
<body class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4 col-lg-3 col-lg-offset-4.5">
    <div id="main">
        <div id="login">
            <h2>Sales Login</h2><br/>
            <form action="" method="post">
                <label>UserName :</label>
                <input id="name" name="username" placeholder="username" type="text">
                <label>Password :</label>
                <input id="password" name="password" placeholder="**********" type="password"><br/><br/><br/>
                <input name="submit" type="submit" value=" Login ">
                <input name="register" type="submit" value=" Register ">
                <span><?php echo $error; ?></span>
            </form>
        </div>
    </div>

    <div>
        <input name="btnSales" type="submit" class="btn btn-default" value="Admin Login" onClick="document.location.href='indexAdmin.php'" />
    </div>
</body>
</html>
