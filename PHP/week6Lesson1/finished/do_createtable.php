<?php
    //indicate the database you want to use
    $db_name = "music";

    //connect to database
    $connection = mysqli_connect("localhost", "root", "chiquita27")
         or die(mysqli_error($connection));
    $db = mysqli_select_db($connection, $db_name) or die(mysqli_error($connection));

    //start creating the SQL statement
    $sql = "CREATE TABLE $_POST[table_name] (";

    //continue the SQL statement for each new field
    for ($i = 0; $i < count($_POST['field_name']); $i++) {
         $sql .= $_POST['field_name'][$i]." ".$_POST['field_type'][$i];

         if ($_POST['auto_increment'][$i] == "Y") {
              $additional = "NOT NULL auto_increment";
         } else {
              $additional = "";
         }

         if ($_POST['primary'][$i] == "Y") {
              $additional .= ", primary key (".$_POST['field_name'][$i].")";
         } else {
              $additional = "";
         }

         if ($_POST['field_length'][$i] != "") {
              $sql .= " (".$_POST['field_length'][$i].") $additional ,";
         } else {
              $sql .= " $additional ,";
         }

    }

    //clean up the end of the string
    $sql = substr($sql, 0, -1);
    $sql .= ")";

    //execute the query
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    //get a good message for display upon success
    if ($result) {
         $msg = "<P>".$_POST['table_name']." has been created!</P>";
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Create a Database Table: Step 3</title>
	</head>
	<body>
		<h1>Adding table to <?php echo "$db_name"; ?>...</h1>
        <?php echo $sql; ?>
		<?php echo "$msg"; ?>
	</body>
</html>


