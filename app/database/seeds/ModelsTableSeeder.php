<?php

use Faker\Factory as Faker;
use ZebraCheese\Intake\Device\Model;
use ZebraCheese\Intake\Device\Brand;

class ModelsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Model::create([
				'name' => $faker->word,
				'brand_id' => Brand::select()->get()->random(1)->id
			]);
		}
	}

}