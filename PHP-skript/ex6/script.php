<?php print("<!DOCTYPE html>"); ?>

<!-- TNMK30 / FO5 / EX6 / script.php -->

<html>
<head>
   <title>Ex 6 Login Script</title>
</head>

<body>
<h1>Login Script</h1>

<h2>Using POST</h2>

<?php
   $user = $_POST["user"];
   $pwd  = $_POST["pwd"];

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
