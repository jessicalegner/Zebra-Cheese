<?php

use Faker\Factory as Faker;
use ZebraCheese\Intake\Device\Device;
use ZebraCheese\Intake\Device\Model;
use ZebraCheese\Intake\Device\Brand;
use ZebraCheese\Intake\Device\Type;


class DevicesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Device::create([
				'model_id' 	=> Model::select()->get()->random(1)->id,
				'type_id'	=> Type::select()->get()->random(1)->id
			]);
		}
	}

}