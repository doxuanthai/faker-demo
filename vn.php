<?php
	require 'autoload.php';
	$faker = Faker\Factory::create('vi_VN');
	echo $faker->name . "<br>";//Tào Kim Điệp
	echo $faker->firstNameMale . "<br>";//Tào Kim Điệp
	echo $faker->address . "<br>";//7843 Phố Châu Phụng Thy, Xã 5, Quận 64 Bình Dương
	echo $faker->province . "<br>";//Trà Vinh
	echo $faker->city . "<br>";//Hà Nội
	echo $faker->safeColorName . "<br>";//Xám
	echo $faker->colorName . "<br>";//Lan tím
	
