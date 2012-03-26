<?php
	require_once("functions.php");
	$number = $_GET["number"];
	is_number($number);
	is_in_range($number);
	if (is_prime($number)){
		echo "<h1 >The number $number is prime.";
	}
	if (!is_prime($number) && is_numeric($number)){
		echo "<h1 style=\"color:blue\" >The number $number is not prime.";
	}
?>