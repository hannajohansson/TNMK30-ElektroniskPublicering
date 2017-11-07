<?php print("<!DOCTYPE html>"); ?>

<!-- TNMK30 / FO5 / EX2 / ex2.php -->

<html>
<head>
   <title>Ex 2 PHP Functions</title>
   <?php include("script.php"); ?>
</head>

<body>
<h1>PHP Functions</h1>

<h2>Function slogan()</h2>

<?php slogan(); ?>

<h2>Function repeat(n)</h2>

<?php repeat(3); ?>

<h2>Function factorial(n)</h2>

<?php print("<p>factorial(5) = " . factorial(5) . "</p>\n"); ?>

<h2>Function shout(msg)</h2>

<h3>Using stdfun strtoupper</h3>

<?php print("<p>shout(\"markup\") = " . shout("markup") . "</p>\n"); ?>

<h2>Function powerOf2(n)</h2>

<h3>Using stdfun pow</h3>

<?php print("<p>powerOf2(6) = " . powerOf2(6) . "</p>\n"); ?>

<h2>Function fibonacci(n)</h2>

<h3>Using an array</h3>

<?php print("<p>fibonacci(7) = " . fibonacci(7) . "</p>"); ?>

<h2>Function today()</h2>

<h3>Using date/time functions</h3>

<?php today(); ?>

</body>
</html>
