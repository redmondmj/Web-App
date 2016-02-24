<?php
	//validate important input
	if ((!$_POST['table_name']) || (!$_POST['num_fields'])) {
	     header( "Location: show_createtable.html");
	     exit;
	}
	//begin creating form for display
	$form_block = "
	<form method=\"POST\" action=\"do_createtable.php\">
	<input TYPE=\"hidden\" name=\"table_name\" value=\"$_POST[table_name]\">
	<table cellspacing=5 cellpadding=5>
	<tr>
	<th>FIELD NAME</th><th>FIELD TYPE</th><th>FIELD LENGTH</th>
	<th>PRIMARY KEY?</th><th>AUTO-INCREMENT?</th></tr>";

	//count from 0 until you reach the number of fields
	for ($i = 0; $i <$_POST['num_fields']; $i++) {
	     //add to the form, one row for each field
	     $form_block .= "<tr>
	     <td align=center><input TYPE=\"text\" name=\"field_name[]\" size=\"30\"></td>
	     <td align=center>
	     <select name=\"field_type[]\">
		  <option value=\"char\">char</option>
		  <option value=\"date\">date</option>
		  <option value=\"float\">float</option>
		  <option value=\"int\">int</option>
		  <option value=\"text\">text</option>
		  <option value=\"varchar\">varchar</option>
	     </select>
	     </td>
	     <td align=center><input type=\"text\" name=\"field_length[]\" size=\"5\"></td>
	     <td align=Ccenter><input type=\"checkbox\" name=\"primary[]\" value=\"Y\"></td>
	     <td align=center><input type=\"checkbox\" name=\"auto_increment[]\" value=\"Y\"></td>
	     </tr>";
	}

	//finish up the form
	$form_block .= "<tr>
	<td align=center colspan=3><input type=\"submit\" value=\"Create Table\"></td>
	</tr>
	</table>
	</form>";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Create a Database Table: Step 2</title>
	</head>
	<body>
		<h1>Define fields for <?php echo "$_POST[table_name]"; ?></h1>
		<?php echo "$form_block"; ?>
	</body>
</html>
