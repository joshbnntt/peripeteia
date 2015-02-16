<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Peri\Evaluation;

class EvaluationsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Evaluation::create([
            'outline_id' => $faker->numberBetween(1, 10),
            'percent'    => $faker->numberBetween(1, 100),
            'name'       => $faker->word()
			]);
		}
	}

}