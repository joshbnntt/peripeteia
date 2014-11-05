<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvaluationOutlineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evaluation_outline', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('evaluation_id')->unsigned()->index();
			$table->foreign('evaluation_id')->references('id')->on('evaluations')->onDelete('cascade');
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
		Schema::drop('evaluation_outline');
	}

}
