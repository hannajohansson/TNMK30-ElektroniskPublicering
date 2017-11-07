<!DOCTYPE html>

<html>
<head>
	<meta setchar="utf-8">
	<title>Databas Ex1</title>
	<link href='http://fonts.googleapis.com/css?family=Joti+One|Fredericka+the+Great' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cherry+Swash' rel='stylesheet' type='text/css'>
	<link type= "text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<div id="center">
	<h1>Suppliers and Parts</h1>
	<h2>Search Part(s)</h2>
	<form method="post">
		<table>
			<tr>
				<td><label for="pnum">pnum  :</label></td>
			</tr>
			<tr>
				<td><input id="pnum" type="text" name="pnum" size="25" </input></td>
			</tr>
			<tr>
				<td><label for="pname">pname:</label></td>
			</tr>
			<tr>
				<td><input id="pname" type="text" name="pname" size="25" </input></td>
			</tr>
			<tr>
				<td><label for="color">color:</label></td>
			</tr>
			<tr>
				<td><input id="color" type="text" name="color" size="25" </input></td>
			</tr>
			<tr>
				<td><label for="weight">weight:</label></td>
			</tr>
			<tr>
				<td><input id="weight" type="text" name="weight" size="25" </input></td>
			</tr>
			<tr>
				<td><label for="city">city:</label></td>
			</tr>
			<tr>
				<td><input id="city" type="text" name="city" size="25" </input></td>
			</tr>
			</table>
		<p><!-- submit & reset -->
		<input type="submit" value="Submit" />
		<input type="reset" value="Clear" />
		</p>
	</form>	
	
	<?php //skapa sträng med SQL-fråga
		//print_r($_POST);
		$query = "SELECT * FROM p WHERE 1";
		foreach ($_POST as $key => $value)
		{
			if($value)
			{
			$query .= " AND $key='$value'";
			}
		}
		//echo $query;
		
	?>
	
	<?php
		$connection = mysql_connect("mysql.itn.liu.se", "spdb", "") or
							die ("connection failed!");
		//välj databas
		mysql_select_db ("spdb");
	?>
	
	<?php
	//Skicka frågan till MySQL
	//Spara (en referens till) resultatet i variablen $contents
	$contents = mysql_query($query);
	print ("<br><br>");
	//Skriv ut svaret som en html-tabell (för tydlighetens skull)
	print ("<table border ='border' cellpadding ='6' cellspacing='10'>\n");
	
	//Skruv ut kolumnnamn
	print ("<tr>");
	for ($i = 0; $i < mysql_num_fields ($contents); $i++)
	{
	$fieldname = mysql_field_name ($contents, $i);
	print ("<th>$fieldname</th>");
	}
	print "</tr>\n";
	
	//skriv ut alla rader i tabellen
	//$row blir False när raderna är slut
	while ($row = mysql_fetch_row($contents))
	{	//skriv ut aktuell rad
		print("<tr>");
		for ($i=0; $i<mysql_num_fields($contents); $i++)
		{
			print("<td>$row[$i]</td>");
		}
		print("</tr>\n");
	}
	print("</table>\n");
	?>
	
	<?php 
	//Avsluta kontakten med databasen
	mysql_close ($connection);
	?>
	
	<p><a href="http://www.student.itn.liu.se/~hanjo306/Lab5"> Tillbaka </a></p>
	
</div>
</body>
</html>