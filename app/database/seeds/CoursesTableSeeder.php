<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Course::create([
                'name'             => $faker->word,
                'number'           => $faker->bothify('?? ###'),
                'general_info'     => $faker->paragraph(),
                'specific_info'    => $faker->paragraph(),
                'accrediting_info' => $faker->paragraph()
			]);
		}
	}

}