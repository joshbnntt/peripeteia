<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
      $this->call('CoursesTableSeeder');
      $this->call('OutlinesTableSeeder');
      $this->call('AssignmentsTableSeeder');
      $this->call('EvaluationsTableSeeder');
      $this->call('MiscellaneousTableSeeder');
      $this->call('OutcomesTableSeeder');
      $this->call('RequirementsTableSeeder');
      $this->call('SummariesTableSeeder');
	}

}
