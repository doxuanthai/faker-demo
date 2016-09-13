<?php
	require 'autoload.php';
	$faker = Faker\Factory::create();
	echo "<b>RandomDigit:</b> " . $faker->randomDigit. "<br>";
	echo "<b>randomDigitNotNull:</b> " . $faker->randomDigitNotNull. "<br>";
	echo "<b>randomNumber:</b> " . $faker->randomNumber. "<br>";
	echo "<b>randomFloat:</b> " . $faker->randomFloat. "<br>";
	echo "<b>numberBetween(500,999):</b> " . $faker->numberBetween(500,999). "<br>";
	echo "<b>randomLetter:</b> " . $faker->randomLetter. "<br>";
	echo '<b>randomElements:</b> ';
	var_dump($faker->randomElements($array = array ('a','b','c'), $count = 2));
	echo "<br>";
	echo '<b>randomElement:</b> ';
	var_dump($faker->randomElement($array = array ('a','b','c')));
	echo "<br>";
	echo "<b>randomLetter:</b> " . $faker->shuffle('hello, world'). "<br>";
	echo "<b>randomLetter:</b> " . $faker->lexify('Hello ????????????'). "<br>";
?>