<?php
require_once __DIR__.'/../../vendor/autoload.php';

$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name.PHP_EOL;
echo $faker->password(33).PHP_EOL;
echo $faker->name.PHP_EOL;
  // 'Lucy Cechtelar';
echo $faker->address.PHP_EOL;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
echo $faker->text;
