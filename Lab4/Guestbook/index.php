<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TNMK30 Lab 4 Guestbook</title>
	<link href='http://fonts.googleapis.com/css?family=Joti+One|Fredericka+the+Great' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cherry+Swash' rel='stylesheet' type='text/css'>
	<link type= "text/css" rel="stylesheet" href="style.css" />
	
  </head>
  <body>
	<div id="center">
	<h1>Skriv till bananhörningarna! :)</h1>
	<form id="" name="" method="post" action="save_entry.php">
		
		<table>
			<tr>
				<td><label for="name">Namn  :</label></td>
			</tr>
			<tr>
				<td><input id="name" type="text" name="input_name" size="42" placeholder="Ditt vackra namn..."></input></td>
			</tr>
		</table>
		<table>
			<tr>
				<td><label for="text">Text :</label></td>
			</tr>	
			<tr>
				<td><textarea name="text" id="text" cols="40" rows="7" placeholder="Dina djupa tankar..."></textarea></td>
			</tr>
		</table>
		
		
		
		<p><!-- submit & reset -->
		<input type="submit" name="submit" value="Submit" />
		<input type="reset" namn="reset" value="Reset" />
		</p>
		
	</form>
	
	<?php
		echo "<h2>Tack för ditt meddelande!</h2>";
		echo "<h2>Gästbok</h2>";
	?>
    <table>
	<?php 
	require "entries.php";
	for ($i = 0; $i < count($assoc_arr); $i++)
	{
	print ("<tr><td>");
	echo $assoc_arr [$i]["name"];
	echo ": ";
	echo $assoc_arr [$i]["text"];
	print ("</td></tr>");
	}
	?>
	</table>
	
	<p><a href="http://www.student.itn.liu.se/~hanjo306/Lab4/">Gå tillbaka</a></p>
	
	</div>
	
  </body>
  
  
  </html>