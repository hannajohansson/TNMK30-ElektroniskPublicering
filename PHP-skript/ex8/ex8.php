<?php print("<!DOCTYPE html>"); ?>

<!-- TNMK30 / FO5 / EX8 / ex8.php -->

<html>
<head>
   <title>Ex 8 Good to know</title>
   <script type="text/javascript" src="script.js"></script>
</head>

<body>
<h1>Good to know</h1>

<h2>Message form</h2>

<form id="form" action="ex8.php" method="post" onsubmit="return validate();">

   <p><!-- textarea -->
      <textarea name="msg" rows="3" cols="15"></textarea>
   </p>

   <p><!-- submit & reset -->
      <input type="submit" value="Submit" />
      <input type="reset" value="Reset" />
   </p>

</form>

<h2>Message processing</h2>

<?php
   print("<p>sizeof(POST) = " . sizeof($_POST) . "</p>\n");

   if (sizeof($_POST) == 1)
   {
      $msg = $_POST["msg"];
      
      print("<h3>Original message</h3>\n");
      print("<p>" . $msg . "</p>");

      $msg = str_replace("\n", "<br />", $msg);

      print("<h3>Using stdfun str_replace()</h3>\n");
      print("<p>" . $msg . "</p>");

      $msg = stripslashes($msg);

      print("<h3>Using stdfun stripslashes()</h3>\n");
      print("<p>" . $msg . "</p>");

      $msg = strip_tags($msg, "<br>");

      print("<h3>Using stdfun strip_tags()</h3>\n");
      print("<p>" . $msg . "</p>");
   }
?>


</body>
</html>
