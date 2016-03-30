<?php

            // recieve values from the POST
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $birth = $_POST['birth'];

            $Course1 = $_POST['Course1'];
            $Course2 = $_POST['Course2'];
            $Course3 = $_POST['Course3'];
            $Course4 = $_POST['Course4'];



            // Get the data from the passed image file, and store a reference to it to be used as an img src later
            @copy($_FILES['imageFile']['tmp_name'], "./images/" . $_FILES['imageFile']['name']) or die("can't upload the file.");
            $filename = "./images/" . $_FILES['imageFile']['name'];

            // Build the talbe in a message
            $msg = "<html><body><table style='border: 1px solid black'>
                    <tr>
                        <td>First Name</td>
                        <td>  $fname</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>  $lname</td>
                    </tr>
                    <tr>
                        <td>E-Mail Addrress</td>
                        <td>  $email</td>
                    </tr>
                    <tr>
                        <td>Birth Date</td>
                        <td>  $birth</td>
                    </tr>
                    <tr>
                        <td>First Course</td>
                        <td>  $Course1</td>
                    </tr>
                    <tr>
                        <td>Second Course</td>
                        <td>  $Course2</td>
                    </tr>
                    <tr>
                        <td>Third Course</td>
                        <td>  $Course3</td>
                    </tr>
                    <tr>
                        <td>Fourth Course</td>
                        <td>  $Course4</td>
                    </tr>

                    </table></body></html>";

            // prepare and send the mail
            $to = "$email,jfmacdonald92@gmail.com";
            $subject = $fname . " " . $lname . "'s Information";
            $mailheaders = "From: Student Form <webmaster@nscctruro.ca>\n";
            $mailheaders .= "Reply-To: $email \n";
            $mailheaders .= "MIME-Version: 1.0" . "\r\n";
            $mailheaders .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            mail($to, $subject, $msg, $mailheaders);


    // Get the old content of the file, and add the new content to it
    $courseArray = array($Course1, $Course2, $Course3, $Course4);
    foreach ($courseArray as $n){

    $coursefilename = "./courses/" . $n;
    $oldContent = file_get_contents($coursefilename);
    $newContent = "$oldContent"."$fname " . substr($lname, 0, 1) . "\n";
    // write to the file
    file_put_contents($coursefilename, $newContent);


}


		?>

<html>
	<head>
		<title>Information Sent</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
        <div class="col-xs-offset-2 col-sm-offset-1">
        <div class="col-xs-8 col-sm-10">
        <div class="well">
            <div class="h3">
                Great! Thanks,
                <?php
                    echo $fname;
                ?>
                for submitting your info.
            </div>
            <?php
                echo ("Name: " . $fname . " " . $lname . "<br/>");
                echo ("Birth Date: " . $birth . "<br/>");
                echo ("First Course: " . $Course1 . "<br/>");
                echo ("Second Course: " . $Course2 . "<br/>");
                echo ("Third Course: " . $Course3 . "<br/>");
                echo ("Fourth Course: " . $Course4 . "<br/>");
            ?>
            <div>
                <div>
                    <img src="<?php echo $filename; ?>" alt="picture"/>
                </div>

            </div>
        </div>
        </div>
        </div>
	</body>
</html>
