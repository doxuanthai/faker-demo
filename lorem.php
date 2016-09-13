<?php
	require 'autoload.php';
	$faker = Faker\Factory::create();
	echo "<b>word:</b> " . $faker->word. "<br>";
	echo '<b>words:</b> ';
	var_dump($faker->words(3));
	echo "<br>";
	echo "<b>sentence:</b> " . $faker->sentence(6). "<br>";
	echo '<b>sentences:</b> ';
	var_dump($faker->sentences(3));
	echo "<br>";
	echo "<b>paragraph:</b> " . $faker->paragraph(). "<br>";
	echo '<b>paragraphs:</b> ';
	var_dump($faker->paragraphs(3));
	echo "<br>";
	echo "<b>text:</b> " . $faker->text(200). "<br>";
	?>
