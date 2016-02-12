<!DOCTYPE html>

<html>
    <head>
        <title>Student Feedback Form</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="col-xs-offset-2">
            <div class="col-xs-10">
                <div class="well">
        <form method="post" action="studentFormResults.php"> 
        
        <form method="post" action="sendStudentForm.php">
            <p>
                <strong>Frist Name:</strong><br>
                <input type="text" name="fname" size=30>
            
            </p>
            <p>
                <strong>Last Name:</strong><br>
                <input type="text" name="lname" size=30>
            
            </p>
            <p>
                <strong>Year of Birth:</strong><br>
                <select name="birth">
                <?php
                    for($i = 1995; $i <= 2006; $i += 1){
                        echo("<option value='{$i}'>{$i}</option>");
                    }							
                ?>
        
                </select>
            </p>
            <p>
                <strong>Grade:</strong><br>
                <select name="grade">
                <?php
                    for($i = 7; $i <= 12; $i += 1){
                        echo("<option value='{$i}'>{$i}</option>");
                    }							
                ?>
        
                </select>
            </p>
            <p>
                <strong>Number of Siblings:</strong><br>
                <select name="siblings">
                <?php
                    for($i = 0; $i <= 10; $i += 1){
                        echo("<option value='{$i}'>{$i}</option>");
                    }							
                ?>
        
                </select>
            </p>
            
            <p>
                <strong>When do you get up in the morning?</strong><br>
                <select name="wake">
                    <?php for($i = 0; $i < 24; $i++): ?>
                        <option value="<?= $i; ?>"><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
                    <?php endfor ?>
                </select>
            </p>
            <p>
                <strong>When do you go to sleep at night?</strong><br>
                <select name="bed">
                    <?php for($i = 0; $i < 24; $i++): ?>
                        <option value="<?= $i; ?>"><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
                    <?php endfor ?>
                </select>
            </p>
            <p>
                <strong>Time spent on homework per day:</strong><br>
                <select name="homework">
                <?php
                    for($i = 0; $i <= 10; $i += .5){
                        echo("<option value='{$i} hours'>{$i}</option>");
                    }							
                ?>
        
                </select>
            </p>
            <p>
                <strong>Time spent on watching TV/DVD etc. per day:</strong><br>
                <select name="tv">
                <?php
                    for($i = 0; $i <= 10; $i += .5){
                        echo("<option value='{$i} hours'>{$i}</option>");
                    }							
                ?>
        
                </select>
            </p>
            <p>
                <strong>Time spent using computer or games per day:</strong><br>
                <select name="games">
                <?php
                    for($i = 0; $i <= 10; $i += .5){
                        echo("<option value='{$i} hours'>{$i}</option>");
                    }							
                ?>
        
                </select>
            </p>
            <p>
                <strong>Time spent with family per day:</strong><br>
                <select name="family">
                <?php
                    for($i = 0; $i <= 10; $i += .5){
                        echo("<option value='{$i} hours'>{$i}</option>");
                    }							
                ?>
        
                </select>
            </p>
            <p>
                <strong>Time spent with friends per day:</strong><br>
                <select name="friends">
                <?php
                    for($i = 0; $i <= 10; $i += .5){
                        echo("<option value='{$i} hours'>{$i}</option>");
                    }							
                ?>
        
                </select>
            </p>
            <p>
                <input type="submit" name="submit" value="Send This Form">
            </p>
        </form>
        </div>
        </div>
        </div>
    </body>
</html> 