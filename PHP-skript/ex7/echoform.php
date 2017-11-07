<?php print("<!DOCTYPE html>"); ?>

<!-- TNMK30 / FO5 / EX7 / echoform.php -->

<html>
<head>
   <title>Ex 7 Echo Form</title>
</head>

<body>
<h1>Echo Form</h1>

<h2>Form Data (GET)</h1>

<?php
   print("<p>sizeof(\$_GET) = " . sizeof($_GET) . "</p>");
   
   foreach($_GET as $key => $value)
   {
      print("<p>" . $key . " = " . $value . "</p>\n");
   }
?>

<h2>Form Data (POST)</h1>

<?php
   print("<p>sizeof(\$_POST) = " . sizeof($_POST) . "</p>");
   
   foreach($_POST as $key => $value)
   {
      print("<p>" . $key . " = " . $value . "</p>\n");
   }
?>

</body>
</html>
