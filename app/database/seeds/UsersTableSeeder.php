<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
            'first_name' => $faker->firstName,
            'last_name'  => $faker->lastName,
            'email'      => $faker->email,
            'password'   => Hash::make('password'),
            'office'     => $faker->bothify('??###'),
            'office_hours' => $faker->numerify('#, #')
			]);
		}
	}

}