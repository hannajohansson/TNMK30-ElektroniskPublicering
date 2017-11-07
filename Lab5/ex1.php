<?php print("<?xml version = '1.0' encoding = 'iso-8859-1'?>\n"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- TNMK30 / FO6 / EX1 / ex1.php -->

<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
   <title>Databasen spdb - ex1</title>
</head>

<body>
<h2>Databasen spdb - ex1</h2>

<h3>Skapa SQL-fråga ... redan gjort!</h3>

<pre>
<?php
   // Skapa sträng med SQL-fråga
   $query = "select * from s";
   // Skriv ut frågan
   print($query);
?>
</pre>

<h3>Anslut till MySQL-server</h3>

<?php
   // Anslut till MySQL-server vid ITN
   // IP-adress = "mysql.itn.liu.se"
   // Användarnamn = "spdb"
   // Lösenord = ""
   $connection =  mysql_connect("mysql.itn.liu.se", "spdb", "") or
	                    die("connection failed!");

   // Välj databas "spdb"
   mysql_select_db("spdb");
?>

<h3>Skicka SQL-fråga och visa resultat</h3>

<p>
<?php
   // Skicka frågan till MySQL
   // Spara (en referens till) resultatet i variabeln $contents
   $contents = mysql_query($query);

   // Skriv ut svaret som en XHTML-tabell (för tydlighets skull)
   print("<table border='border' cellpadding='6' cellspacing='3'>\n");

   // Skriv ut kolumnnamn 
   print("<tr>");
   for($i = 0; $i < mysql_num_fields($contents); $i++)
   {
      $fieldname = mysql_field_name($contents, $i);
      print("<th>$fieldname</th>");
   }
   print "</tr>\n";

   // Skriv ut alla rader i tabellen
   // $row blir FALSE när raderna är slut
   while ($row = mysql_fetch_row($contents))
   {
      // skriv ut aktuell rad	 
      print("<tr>");
      for($i=0; $i<mysql_num_fields($contents); $i++)
      {
         print("<td>$row[$i]</td>");
      }
      print("</tr>\n");
   }
   
   print("</table>\n");
?>
</p>

<h3>Stäng anslutning till MySQL-server</h3>

<?php
   // Pja, inte nödvändigt här men god vana
   mysql_close($connection);
?>

</body>
</html>
