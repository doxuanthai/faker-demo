<?php
require "autoload.php";

$faker = Faker\Factory::create();

// generate data by accessing properties
for ($i = 0; $i < 10; $i++) {
    echo "<p>" . $faker->name . "</p>";
    echo "<p>" . $faker->address . "</p>";
}