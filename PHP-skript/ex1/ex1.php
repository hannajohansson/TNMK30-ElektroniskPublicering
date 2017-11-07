<?php print("<!DOCTYPE html>"); ?>

<!-- 
     It's possible to write the line above explicitly at the top of this PHP file, like this:
     <!DOCTYPE html>
     But that will give the impression that this PHP file is actually an HTML document
     so use the PHP print function to insert the DOCYPE line in the generated .hmtl file
 -->
<!-- TNMK30 / FO5 / EX1 / ex1.php -->

<html>
<head>
   <title>Ex 1 PHP</title>
   <!-- internal PHP-script -->
   <?php
      print("<p>Internal PHP-script</p>\n");
   ?>
   <!-- external PHP-script -->
   <?php
      include("script.php");
   ?>
</head>

<body>
<h1>PHP</h1>

<h2>Internal PHP-script</h2>

<?php
   print("<p>Internal PHP-script</p>\n");
?>

<h2>External PHP-script</h2>

<?php
   include("script.php");
?>

</body>
</html>
