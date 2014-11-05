<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOutlineSummaryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('outline_summary', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('outline_id')->unsigned()->index();
			$table->foreign('outline_id')->references('id')->on('outlines')->onDelete('cascade');
			$table->integer('summary_id')->unsigned()->index();
			$table->foreign('summary_id')->references('id')->on('summaries')->onDelete('cascade');
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
		Schema::drop('outline_summary');
	}

}
