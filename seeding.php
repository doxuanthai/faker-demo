<?php
	require 'autoload.php';
	$faker = Faker\Factory::create();
	$faker->seed(999);
	echo $faker->name; // 'Chandler Leffler';
	?>
