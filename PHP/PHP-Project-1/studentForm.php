<!DOCTYPE html>

<html>
    <head>
        <title>Student Feedback Form</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="col-sm-offset-2">
            <div class="col-sm-10">
            <h1>Please Enter Your Information</h1>
            <div class="well col-sm-offset-1 col-sm-10" >

            <form method="post" enctype="multipart/form-data" action="sendStudentForm.php">

            <p>
                <strong>Frist Name:</strong><br>
                <input type="text" name="fname" placeholder="First Name" size=30 required>

            </p>
            <p>
                <strong>Last Name:</strong><br>
                <input type="text" name="lname" placeholder="Last Name" size=30 required>

            </p>
            <p>
                <strong>E-Mail:</strong><br>
                <input type="email" name="email" placeholder="example@email.com" size=30 required>

            </p>
            <p>
                <strong>Date of Birth:</strong><br>
                <input type="date" name="birth" min="1996-01-01" required>
            </p>

            </div>


            <?php
                $courseArray = array("physicaleducation10", "accounting11", "biology11", "digitalarts11", "french11", "robotics11", "communications12", "english12", "history12", "law12");
            ?>



            <div class="well col-sm-offset-1 col-sm-10" >
            <p>
                <strong>First Course:</strong><br>
                <select name="Course1" required>
                <?php
                    for($i = 0; $i <= sizeof($courseArray); $i += 1){
                        echo("<option value='{$courseArray[$i]}'>{$courseArray[$i]}</option>");
                    }
                ?>

                </select>
            </p>
            <p>
                <strong>Second Course:</strong><br>
                <select name="Course2" required>
                <?php
                    for($i = 0; $i <= sizeof($courseArray); $i += 1){
                        echo("<option value='{$courseArray[$i]}'>{$courseArray[$i]}</option>");
                    }
                ?>

                </select>
            </p>
                <p>
                <strong>Third Course:</strong><br>
                <select name="Course3" required>
                <?php
                    for($i = 0; $i <= sizeof($courseArray); $i += 1){
                        echo("<option value='{$courseArray[$i]}'>{$courseArray[$i]}</option>");
                    }
                ?>

                </select>
            </p>

            <p>
                <strong>Fourth Course:</strong><br>
                <select name="Course4" required>
                <?php
                    for($i = 0; $i <= sizeof($courseArray); $i += 1){
                        echo("<option value='{$courseArray[$i]}'>{$courseArray[$i]}</option>");
                    }
                ?>

                </select>
            </p>
            </div>

            <div class="well col-sm-offset-1 col-sm-10" >


                <input type="file" name="imageFile" accept="image/*" required>


            </div>

            <div class="text-center">
            <p>
                <input type="submit" name="submit" value="Send This Form">
            </p>
            </div>

        </form>
        </div>
        </div>

    </body>
</html>
