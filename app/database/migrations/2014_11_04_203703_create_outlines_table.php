<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOutlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('outlines', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('course_id')->unsigned()->indexed();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->integer('instructor_id')->unsigned()->indexed();
            $table->foreign('instructor_id')->references('id')->on('users');
            $table->integer('credit_hours');
            $table->longText('description')->nullable();
            $table->longText('course_requirements')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('outlines');
	}

}
