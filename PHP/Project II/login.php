<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
}else if(strlen($_POST['password'])<3){
    $error = "Password is too short.";
}else if(ctype_alnum ($_POST['password'])==false){
    $error = "Password must contain letters and numbers only.";
}
else
{
    // Define $username and $password
    $username=$_POST['username'];
    $password=$_POST['password'];
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysqli_connect("localhost", "root", "");
    // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    // Selecting Database
    $db = mysqli_select_db($connection, "company");
    // SQL query to fetch information of registerd users and finds user match.
    $query = mysqli_query($connection, "select password from login where username='$username'");
    $rows = mysqli_num_rows($query);

    // this is a function to minmic the functionality of mysql_result
    // it essentially "dehashes" the hashed value
    function mysqli_result($result , $offset , $field = 0){
        $result->data_seek($offset);
        $row = $result->fetch_array();
        return $row[$field];
    }
    // check if input equals the password for this account
    $hashedPass = mysqli_result($query, 0, "password");

if (($rows == 1)&&(password_verify($password, $hashedPass))) {
    $_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
    $error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}else if (isset($_POST['register'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }else if(strlen($_POST['password'])<3){
        $error = "Password is too short.";
    }else if(ctype_alnum ($_POST['password'])==false){
        $error = "Password must contain letters and numbers only.";
    }
    else
    {
        // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysqli_connect("localhost", "root", "");
        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        // Hashing the input
        $options = [
            'cost' => 11,
        ];
        $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);

        // Selecting Database
        $db = mysqli_select_db($connection, "company");
        // SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query($connection, "select * from login where username='$username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $error = "Username already in use.";
        }else{
        $query = mysqli_query($connection, "INSERT INTO login (username,password)
VALUES ('$username','$hashPassword');");
            $error = "Account successfully created.";
        }
        mysqli_close($connection); // Closing Connection
    }
}
?>
