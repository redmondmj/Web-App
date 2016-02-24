<html>
	<head>
		<title>All-In-One Feedback Form</title>
	</head>
	<body>
		<?php
            $send = "yes";
            $message_err = '';
            $name_err = '';
            $email_err = '';
			$form_block = "
				<form method=\"POST\" action=\"$_SERVER[PHP_SELF]\">
                    <p>
                        <strong>Your Name:</strong><br>
                        <input type=\"text\" name=\"sender_name\" size=30>
                    </p>
                    <p>
                        <strong>Your E-Mail Address:</strong><br>
                        <input type=\"text\" name=\"sender_email\" size=30>
                    </p>
                    <p>
                        <strong>Message:</strong><br>
                        <textarea name=\"message\" cols=30 rows=5 wrap=virtual>Enter Message here.</textarea>
                    </p>
                    <input type=\"hidden\" name=\"op\" value=\"ds\">
                    <p>
                        <input type=\"submit\" name=\"submit\" value=\"Send This Form\">
                    </p>
				</form>";

			if (isset($_POST['op']) != "ds") {
			     // they need to see the form
			     echo "$form_block";
			} else if ($_POST['op'] == "ds") {
			     // check value of $_POST[sender_name]
			     if ($_POST['sender_name'] == "") {
			          $name_err = "<h4>Please enter your name!</h4><br>";
			          $send = "no";
			     }
			     // check value of $_POST[sender_email]
			     if ($_POST['sender_email'] == "") {
			          $email_err = "<h4>Please enter your e-mail address!</h4><br>";
			          $send = "no";
			     }
			     // check value of $_POST[message]
			     if ($_POST['message'] == "") {
			          $message_err = "<h4>Please enter a message!</h4><br>";
			          $send = "no";
			     }
			     if ($send != "no") {
			          // it's ok to send, so build the mail
			          $msg = "E-MAIL SENT FROM it.nscctruro.ca\n";
			          $msg .= "Sender's Name:    $_POST[sender_name]\n";
			          $msg .= "Sender's E-Mail:  $_POST[sender_email]\n";
			          $msg .= "Message:          $_POST[message]\n\n";

			          $to = "matt@nscctruro.ca";
			          $subject = "All-in-One Web Site Feedback";
			          $mailheaders = "From:it.nscctruro.ca
			          <webmaster@nscctruro.ca>\n";
			          $mailheaders .= "Reply-To: $_POST[sender_email]\n";
			          //send the mail
			          mail($to, $subject, $msg, $mailheaders);
			          //display confirmation to user
			          echo "<p>Mail has been sent!</p>";
			     } else if ($send == "no") {
			          //print error messages
			          echo "$name_err";
			          echo "$email_err";
			          echo "$message_err";
			          echo "$form_block";
			     }
			}
		?>
	</body>
</html>
