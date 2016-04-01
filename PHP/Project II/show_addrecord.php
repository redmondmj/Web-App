<?php
    include('session.php');

    $provinceArray = array("AB", "BC", "MB", "NB", "NL+LD", "NWT", "NS", "NU", "ON", "PEI", "QC", "SK", "YK");
?>

<!DOCTYPE html>
<html>
	<head>
        <title>Add a Record</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Load jQuery JS -->
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <!-- Load jQuery UI Main JS  -->
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="calendar.js"></script>
	</head>
	<body class="form-group col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
		<h1>Add Client Info:</h1>
        <b id="logout"><a href="logout.php">Log Out</a></b>
		<form method="POST" action="do_addrecord.php" >
			
            <p><strong>First Name:</strong>
            <input type="text" class="form-control" name="fname" size=35 maxlength=150 required></p>

            <p><strong>Last Name:</strong>
            <input type="text" class="form-control" name="lname" size=35 maxlength=50 required></p>

            <p><strong>Phone Number:</strong>
            <input type="text" class="form-control" pattern="^\d{4}-\d{3}-\d{4}$" placeholder="XXXX-XXX-XXXX" name="phone" size=35 maxlength=100 required></p>

            <p><strong>Email Address:</strong>
            <input type="email" class="form-control" name="emailAddress" placeholder="something@domain.com" size=35 maxlength=100 required></p>

            <p><strong>Street Address:</strong>
            <input type="text" class="form-control" name="streetAddress" size=35 maxlength=100 required>
            </p>

            <p><strong>Date of Birth:</strong>
            <input type="text" id= datepicker class="form-control" placeholder="YYYY-MM-DD" name="birthday"/></p>

            <p><strong>Province:</strong><br>
            <select class="form-control" name="province" required>
                <?php
                    for($i = 0; $i <= sizeof($provinceArray); $i += 1){
                        if (isset($provinceArray[$i])) {
                             echo("<option value='{$provinceArray[$i]}'>{$provinceArray[$i]}</option>");
                        }
                    }
                ?>
            </select></p>  
            <p><strong>Postal Code:</strong><br>
            <input type="text" class="form-control" name="postCode" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" placeholder="A1B B2A" size=35 maxlength=100 required></p>	
            
            <div>
                <input type="submit" class="btn btn-success pull-right" name="submit" value="Add Client">
            </div>
            <div>
                <p><a href="profile.php">Return to Menu</a></p>
            </div>
		</form>
        <div> 
        <div>
	</body>
</html>

