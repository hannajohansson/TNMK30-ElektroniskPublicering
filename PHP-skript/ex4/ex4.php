<?php print("<!DOCTYPE html>"); ?>

<!-- TNMK30 / FO5 / EX4 / ex4.php -->

<html>
<head>
   <title>Ex 4 Files</title>
</head>

<body>
<h1>Files</h1>

<h2>Write to file</h2>

<?php
   // �ppna fil f�r skrivning (med felkoll)
   $file = fopen("payroll.txt", "w") or
             die("ERROR - cannot open file!");
   // skriv till fil
   fwrite($file, "Smith" . " : " . 8000 . "\n");
   fwrite($file, "Jones" . " : " . 5000 . "\n");
   // st�ng fil
   fclose($file);
?>

<h2>Append to file</h2>

<?php
   // �ppna fil f�r till�gg (med felkoll)
   $file = fopen("payroll.txt", "a") or
             die("ERROR - cannot open file!");
   // l�gg till sist i fil
   fwrite($file, "Blake" . " : " . 6000 . "\n");
   // st�ng fil
   fclose($file);
?>

<h2>Read from file</h2>

<?php
   // �ppna fil f�r l�sning (med felkoll)
   $file = fopen("payroll.txt", "r") or
             die("ERROR - cannot open file!");
   // l�s in f�rsta rad fr�n fil
   $line = fgets($file);
   while (!feof($file))
   {
       print("<p>" . trim($line) . "</p>\n");
       // l�s in n�sta rad fr�n fil
       $line = fgets($file);
   }
   // st�ng fil
   fclose($file);
?>

</body>
</html>
