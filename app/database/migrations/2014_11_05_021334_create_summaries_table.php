<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSummariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('summaries', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('outline_id')->unsigned()->indexed();
            $table->foreign('outline_id')->references('id')->on('outlines');
            $table->integer('week')->nullable();
            $table->string('day')->nullable();
            $table->integer('lecture')->nullable();
            $table->longText('description');
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
		Schema::drop('summaries');
	}

}
