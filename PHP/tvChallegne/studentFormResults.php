
		<?php

            //Check if the form is submitted and complete
            if (($_POST['fname'] == "") || ($_POST['lname'] == "")) {
                header("Location: studentForm.php");
            exit;
            }

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $birth = $_POST['birth'];
            $grade = $_POST['grade'];
            $siblings = $_POST['siblings'];
            $wake = $_POST['wake'];
            $bed = $_POST['bed'];
            $homework = $_POST['homework'];
            $tv = $_POST['tv'];
            $games = $_POST['games'];
            $family = $_POST['family'];
            $friends = $_POST['friends'];
            $daysInSchoolYear = 190;

            $yearsLeft = 12-$grade;
            $homeworkLeft = $yearsLeft*$daysInSchoolYear*$homework;
            $screentimeLeft = ($yearsLeft*365*$games)+($yearsLeft*365*$tv);
            if ($wake != 0){
                $screenPercent = ($tv+$games)/$wake;
            }else{
                $screenPercent = "Undefined (this person is comatose, and telekenetic)";
            }



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
                        <td>Birth Year</td>
                        <td>  $birth</td>
                    </tr>
                    <tr>
                        <td>Grade</td>
                        <td>  $grade</td>
                    </tr>
                    <tr>
                        <td>Number of Siblings</td>
                        <td>  $siblings</td>
                    </tr>
                    <tr>
                        <td>Years Left in School</td>
                        <td>  $yearsLeft</td>
                    </tr>
                    <tr>
                        <td>Hours Left in Front of Screen</td>
                        <td>  $screentimeLeft</td>
                    </tr>
                    </table></body></html>";

            $to = "jfmacdonald91@gmail.com";
            $subject = $fname . " " . $lname . "'s Survey Results";
            $mailheaders = "From: Student Survey <webmaster@nscctruro.ca>\n";
            $mailheaders .= "Reply-To: jfmacdonald91@gmail.com \n";
            $mailheaders .= "MIME-Version: 1.0" . "\r\n";
            $mailheaders .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            mail($to, $subject, $msg, $mailheaders);

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
                for responding to our survey.
            </div>
            <?php
                echo ("Name: " . $fname . " " . $lname . "<br/>");
                echo ("Birth Year: " . $birth . "<br/>");
                echo ("Grade: " . $grade . "<br/>");
                echo ("Siblings: " . $siblings . "<br/><br/>");

                echo ("Years Left in School: " . $yearsLeft . "<br/>");
                echo ("Hours Left in Front of Screen: " . $screentimeLeft . "<br/><br/>");

                echo ("Percent of waking time spent in front of screen: " . $screenPercent);
            ?>
            <div>

            </div>
        </div>
        </div>
	</body>
</html>
