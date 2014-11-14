<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SummariesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Summary::create([
            'outline_id'  => $faker->numberBetween(1, 10),
            'week'        => $faker->numberBetween(1, 15),
            'day'         => $faker->numberBetween(1, 3),
            'lecture'     => $faker->numberBetween(1, 52),
            'description' => $faker->paragraph()
			]);
		}
	}

}