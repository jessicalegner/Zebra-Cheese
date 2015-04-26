<?php

use ZebraCheese\Intake\Device\Type;

class TypesTableSeeder extends Seeder {

	public function run()
	{
		Type::create([
			'name' => 'Phone'
		]);

		Type::create([
			'name' => 'Tablet'
		]);

		Type::create([
			'name' => 'Computer'
		]);

		Type::create([
			'name' => 'Other'
		]);
	}

}