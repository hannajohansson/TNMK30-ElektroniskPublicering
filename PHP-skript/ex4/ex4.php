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
   // öppna fil för skrivning (med felkoll)
   $file = fopen("payroll.txt", "w") or
             die("ERROR - cannot open file!");
   // skriv till fil
   fwrite($file, "Smith" . " : " . 8000 . "\n");
   fwrite($file, "Jones" . " : " . 5000 . "\n");
   // stäng fil
   fclose($file);
?>

<h2>Append to file</h2>

<?php
   // öppna fil för tillägg (med felkoll)
   $file = fopen("payroll.txt", "a") or
             die("ERROR - cannot open file!");
   // lägg till sist i fil
   fwrite($file, "Blake" . " : " . 6000 . "\n");
   // stäng fil
   fclose($file);
?>

<h2>Read from file</h2>

<?php
   // öppna fil för läsning (med felkoll)
   $file = fopen("payroll.txt", "r") or
             die("ERROR - cannot open file!");
   // läs in första rad från fil
   $line = fgets($file);
   while (!feof($file))
   {
       print("<p>" . trim($line) . "</p>\n");
       // läs in nästa rad från fil
       $line = fgets($file);
   }
   // stäng fil
   fclose($file);
?>

</body>
</html>
