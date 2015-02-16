<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Peri\Miscellaneous;

class MiscellaneousTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Miscellaneous::create([
            'outline_id' => $faker->numberBetween(1, 10),
            'title'      => $faker->word,
            'text'       => $faker->text()
			]);
		}
	}

}