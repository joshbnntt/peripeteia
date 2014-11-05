<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOutcomeOutlineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('outcome_outline', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('outcome_id')->unsigned()->index();
			$table->foreign('outcome_id')->references('id')->on('outcomes')->onDelete('cascade');
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
		Schema::drop('outcome_outline');
	}

}
