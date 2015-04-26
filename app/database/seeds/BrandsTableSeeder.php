<?php

use Faker\Factory as Faker;
use ZebraCheese\Intake\Device\Brand;

class BrandsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 6) as $index)
		{
			Brand::create([
				'name' => $faker->unique()->randomElement(array('Samsung', 'Apple', 'LG', 'Motorola','Blackberry','Kindle'))
			]);
		}
	}

}