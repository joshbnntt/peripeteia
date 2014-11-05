<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOutlineOutcomesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('outline_outcomes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('outline_id')->unsigned();
            $table->foreign('outline_id')->references('id')->on('outlines');
            $table->integer('outcome_id')->unsigned();
            $table->foreign('outcome_id')->references('id')->on('outcomes');
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
		Schema::drop('outline_outcomes');
	}

}
