<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AssignmentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Assignment::create([
                'outline_id'  => $faker->numberBetween(1, 10),
                'due_date'    => $faker->dateTime(),
                'description' => $faker->paragraph(),
                'type'        => $faker->word()
			]);
		}
	}

}