<?php print("<?xml version = '1.0' encoding = 'iso-8859-1'?>\n"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- TNMK30 / FO6 / EX2 / ex2.php -->

<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
   <title>Databasen spdb - ex2</title>
   <script type="text/javascript" src="script.js"></script>
</head>

<body>
<h2>Databasen spdb - ex2</h2>

<h3>Formulär för SQL-fråga</h3>

<form id="form" action="ex2.php" method="post" onsubmit="return validate();">
   <p><!-- enkelt formulär -->
      <label>
         <p>Skriv in din SQL-fråga:</p>
         <textarea name="query" rows="10" cols="50"></textarea>
      </label>
   </p>
   <p><!-- submit & reset -->
      <input type="submit" value="Skicka" />
      <input type="reset" value="Rensa" />
   </p>
</form>

<!-- Kolla om formulärdata har postats -->

<?php
   if (sizeof($_POST) == 0)
   {
      print("</body>\n</html>\n");
      die();
   }
?>

SELECT * FROM p WHERE 1


<h3>Behandla SQL-fråga från formulär</h3>

<pre>
<?php
   // Fråga från formuläret
   $query = $_POST["query"];
   // Kan behöva bearbetas lite innan den skickas
   // ... ersätt alla förekomster av \' med endast '
   // Finns en standardfunktion i PHP för detta
   $query = stripslashes($query);
   // Skriv ut frågan
   print($query);
?>
</pre>

<h3>Skapa anslutning till MySQL-server</h3>

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

   // Skriv ut svaret som en tabell (för tydlighets skull)
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

<h3>Stäng anslutning till MySQL-server</h3>

<?php
   // Pja, inte nödvändigt här men god vana
   mysql_close($connection);
?>

</body>
</html>
