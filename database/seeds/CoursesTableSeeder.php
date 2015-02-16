<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Peri\Course;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('courses')->delete();

      $json         = File::get(storage_path() . "/courses.json");
      $json_decoded = json_decode($json, true);

      foreach($json_decoded as $key => $value)
      {
         for($i = 0; $i < count($value); $i++)
         {
            Course::create([
               'name'                    => $value[$i]['courseName'],
               'credit_hours'            => $value[$i]['creditHours'],
               'general_information'     => $value[$i]['courseDescription'],
               'specific_information'    => $value[$i]['courseDescription'],
               'accrediting_information' => $value[$i]['courseDescription']
            ]);
         }
      }
	}

}