<?php

use Faker\Factory as Faker;
use ZebraCheese\Intake\Customer;

class CustomerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Customer::create([
				'first_name' => $faker->firstname,
				'last_name' => $faker->lastname,
				'contact_phone' => $faker->phoneNumber,
				'email' => $faker->email,
				'address' => $faker->streetAddress,
				'city' => $faker->city,
				'state' => $faker->stateAbbr,
				'zip' => $faker->postcode,
				'notes' => $faker->text($maxNbChars = 20)
			]);
		}
	}

}