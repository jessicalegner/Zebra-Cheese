<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Eloquent::unguard();

	    $tables = array(
			'types',
			'brands',
			'models'
        );

        foreach ($tables as $table){
			DB::table($table)->truncate();
		}

		$this->call('TypesTableSeeder');
		$this->call('BrandsTableSeeder');
		$this->call('ModelsTableSeeder');
		$this->call('DevicesTableSeeder');
		$this->call('CustomerTableSeeder');
	}

}
