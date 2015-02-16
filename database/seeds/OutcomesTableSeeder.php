<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Peri\Outcome;

class OutcomesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Outcome::create([
            'outline_id'  => $faker->numberBetween(1, 10),
            'description' => $faker->paragraph()
			]);
		}
	}

}