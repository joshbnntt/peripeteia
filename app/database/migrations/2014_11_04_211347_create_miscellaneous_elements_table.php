<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMiscellaneousElementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('miscellaneous_elements', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('miscellaneous_id')->unsigned();
            $table->foreign('miscellaneous_id')->references('id')->on('miscellaneous');
            $table->integer('outline_id')->unsigned();
            $table->foreign('outline_id')->references('id')->on('outlines');
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
		Schema::drop('miscellaneous_elements');
	}

}
