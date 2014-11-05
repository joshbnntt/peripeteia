<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOutlineSummariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('outline_summaries', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('outline_id')->unsigned();
            $table->foreign('outline_id')->references('id')->on('outlines');
            $table->integer('summary_id')->unsigned();
            $table->foreign('summary_id')->references('id')->on('summaries');
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
		Schema::drop('outline_summaries');
	}

}