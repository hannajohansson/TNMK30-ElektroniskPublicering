<?php
/* TNMK30 / FO5 / EX2 / script.php */

function slogan()
{
    print("<p>Markup for the markup artist!</p>\n");
}

function repeat($n)
{
    for ($i = 0; $i < $n; $i++)
    {
	slogan();
    }
}

function factorial($n)
{
    $product = 1;

    for ($i = 2; $i <= $n; $i++)
    {
	$product *= $i;
    }

    return $product;
}

function shout($msg)
{
    // using stdfun strtoupper
    return strtoupper($msg);
}

function powerOf2($n)
{
    // using stdfun strtoupper
    return pow(2, $n);
}

function fibonacci($n)
{
    // using an array 

    $fib = array();

    $fib[0] = 1;
    $fib[1] = 1;

    for ($i = 2; $i <= $n; $i++)
    {
	$fib[$i] = $fib[$i - 2] + $fib[$i - 1];
    }

    return $fib[$n];
}

function today()
{
    // using date/time functions 

    print("<p>Universal time : " . gmdate(DATE_RFC822) . "</p>\n");
    print("<p>Local time : " . date(DATE_RFC822) . "</p>\n");
    print("<p>Custom time : " . date("Y-m-d H:i:s") . "</p>\n");
}

?>
