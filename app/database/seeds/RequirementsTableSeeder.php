<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RequirementsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Requirement::create([
                'outline_id' =>  $faker->numberBetween(1, 10),
                'title'      =>  $faker->word,
                'description' => $faker->paragraph()
			]);
		}
	}

}