<!DOCTYPE html>

<html>
<head>
	<meta setchar="utf-8">
	<title>Databas Ex2</title>
	<link href='http://fonts.googleapis.com/css?family=Joti+One|Fredericka+the+Great' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cherry+Swash' rel='stylesheet' type='text/css'>
	<link type= "text/css" rel="stylesheet" href="style.css" />
	
</head>
<body>
<div id="center">
	<h1>Suppliers and Parts</h1>
	<h2>All Parts</h2>
<?php //skapa sträng med SQL-fråga
	$query = "SELECT * FROM p WHERE 1";
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

	<h3>Search Shipment(s) for Specific Parts</h3>
	<form id="form" action="" method="post">
    <p><!-- enkelt formulär -->
      <label>
         <h3>pnum:</h3>
         <input name="pnum" size="25"></input>
      </label>
    </p>
    <p><!-- submit & reset -->
      <input type="submit" value="Submit" />
      <input type="reset" value="Clear" />
    </p>
</form>

<?php
	//Kolla om formulärdata har postats
   if (sizeof($_POST) == 0)
   {
      print("</body>\n</html>\n");
      die();
   }
?>

<?php
   // Fråga från formuläret
   $pnum = $_POST["pnum"];
   // Kan behöva bearbetas lite innan den skickas
   // Finns en standardfunktion i PHP för detta
   //ersätter alla förekomster av \' med endast '
   $pnum = stripslashes($pnum);  

   
   $query1 = "SELECT sp.pnum, s.snum, s.sname, s.city, sp.qty
			FROM s JOIN sp ON sp.snum = s.snum 
			WHERE '".$pnum."' = sp.pnum";
?>
				 
	
	
<?php
	//Skicka frågan till MySQL
	//Spara (en referens till) resultatet i variablen $contents
	$contents = mysql_query($query1);
	print("<br><br>");
	//Skriv ut svaret som en html-tabell (för tydlighetens skull)
	 
	print("<table border ='border' cellpadding ='6' cellspacing='10'>\n");
	
	//Skriv ut kolumnnamn
	print("<tr>");
	for ($i = 0; $i < mysql_num_fields($contents); $i++)
	{
	$fieldname = mysql_field_name($contents, $i);
	print("<th>$fieldname</th>");
	}
	print ("</tr>\n");
	
	//skriv ut alla rader i tabellen
	//$row blir False när raderna är slut
	while ($row = mysql_fetch_row($contents))
	{	//skriv ut aktuell rad
		print("<tr>");
		for($i=0; $i<mysql_num_fields($contents); $i++)
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
