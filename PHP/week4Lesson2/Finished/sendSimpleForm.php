<?php
        //Check if the form is submitted and complete
   if (($_POST['sender_name'] == "") || ($_POST['sender_email'] == "") || ($_POST['message'] == "")) {
         header("Location: simpleForm.php");
         exit;
   }

    $msg = "";

    $msg .= "Message:\t$_POST[message]\n";
    $to = "jfmacdonald91@gmail.com";
    $subject = "Web Site Feedback";
    $mailheaders = "From: My Web Site <webmaster@nscctruro.ca>\n";
    $mailheaders .= "Reply-To: $_POST[sender_email]\n";
    mail($to, $subject, $msg, $mailheaders);
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Simple Feedback Form Sent</title>
    </head>
    <body>
        <h1>The following e-mail has been sent:</h1>
        <p><strong>Your Name:</strong><br>
        <?php echo "$_POST[sender_name]"; ?>
        <p><strong>Your E-Mail Address:</strong><br>
        <?php echo "$_POST[sender_email]"; ?>
        <p><strong>Message:</strong><br>
        <?php echo "$_POST[message]"; ?>
    </body>
</html>
