<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssignmentOutlineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignment_outline', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('assignment_id')->unsigned()->index();
			$table->foreign('assignment_id')->references('id')->on('assignments')->onDelete('cascade');
			$table->integer('outline_id')->unsigned()->index();
			$table->foreign('outline_id')->references('id')->on('outlines')->onDelete('cascade');
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
		Schema::drop('assignment_outline');
	}

}
