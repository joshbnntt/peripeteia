<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Peri\Outline;

class OutlinesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Outline::create([
            'instructor_id' => $faker->numberBetween(1, 10),
            'course_id'     => $faker->numberBetween(1, 10),
            'description'   => $faker->paragraph()
			]);
		}
	}

}