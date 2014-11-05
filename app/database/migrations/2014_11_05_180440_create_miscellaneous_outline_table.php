<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMiscellaneousOutlineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('miscellaneous_outline', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('miscellaneous_id')->unsigned()->index();
			$table->foreign('miscellaneous_id')->references('id')->on('miscellaneous')->onDelete('cascade');
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
		Schema::drop('miscellaneous_outline');
	}

}
