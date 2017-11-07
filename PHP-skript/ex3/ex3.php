<?php print("<!DOCTYPE html>"); ?>

<!-- TNMK30 / FO5 / EX3 / ex3.php -->

<html>
<head>
   <title>Ex 3 PHP Arrays</title>
</head>

<body>
<h1>Arrays</h1>

<h2>Mapping integers to strings</h2>

<?php
   $employee = array("Smith", "Jones");

   $employee[2] = "Blake";

   for ($i = 0; $i < count($employee); $i++)
   {
      print("<p>Name of employee $i is $employee[$i]</p>\n");
   }
?>

<h2>Mapping strings to integers</h2>

<?php
   $salary = array("Smith" => 8000, "Jones" => 5000);

   $salary["Blake"] = 6000;

   for (reset($salary); $key = key($salary); next($salary))
   {
      print("<p>Salary of $key is $salary[$key]</p>\n");
   }
?>

<h2>Mapping strings to strings</h2>

<?php
   $title = array("Smith" => "Boss", "Jones" => "Clerk");

   $title["Blake"] = "Worker";

   foreach ($title as $key => $value)
   {
      print("<p>Title of $key is $value</p>\n");
   }
?>

</body>
</html>
