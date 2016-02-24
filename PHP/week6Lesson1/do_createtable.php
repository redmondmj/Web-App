<?php
    $dbname = "test";

    $connection = @mysqli_connect("localhost", "root", "password");
    if(mysqli_errno($connection)){
        $msg = "Failed to connect to MySQL: ".mysqli_connect_error($connection);
        echo $msg;
        exit();
    }
    $do = mysqli_select_db($connection, $_POST[table_name]) or die(mysqli_error($connection));
        $sql = "CREATE TABLE $_POST[table_name] (";

        for ($i = 0; $i <count($_POST['field_name']); $i++){
            $sql .= $_POST['field_name'][$i]." ".$_POST['field_type'][$i];
            if (($_POST['auto_increment'][$i]) == "Y") {
                $additional = "NOT NULL auto_increment";
            } else {
                $additional .= "";
            }
            if (($_POST['primary'][$i]) == "Y"){
                $additional .= ", primary key (".$_POST['field_name'][$i].")";
            }
            if (($_POST['field_length'][$i]) != ""){
                $sql .= " (".$_POST['field_length'][$i].") $additional ,";
            }else{
                $sql .= " $additional ,";
            }
        }
    $sql = substr($sql, 0, -1);
    $sql .= ")";

    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if($result){
        $msg = "<p>".$_POST['table_name']." has been created </p>";
    }

?>

<!DOCTYPE html>

<html>
	<head>
		<title>Create a Databases Table</title>
	</head>
	<body>
        <h1>Adding table to </h1>
        <?php
            echo "$dbname"
        ?>
        <?php
            echo "$sql";
        ?>
		<?php
            echo "$msg";
        ?>
	</body>
</html>
