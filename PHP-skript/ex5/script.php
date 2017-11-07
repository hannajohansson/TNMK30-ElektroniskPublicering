<?php print("<!DOCTYPE html>"); ?>

<!-- TNMK30 / FO5 / EX5 / script.php -->

<html>
<head>
   <title>Ex 5 Login Script</title>
</head>

<body>
<h1>Login Script</h1>

<h2>Using GET</h2>

<?php
   $user = $_GET["user"];
   $pwd  = $_GET["pwd"];

   if ($user == "jambo007" && $pwd == "secret")
   {
       print("<p>Login Success!</p>\n");
   }
   else
   {
       print("<p>Login Failure!<p>\n");
   }
?>

</body>
</html>
