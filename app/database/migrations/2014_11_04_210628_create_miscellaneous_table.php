<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMiscellaneousTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('miscellaneous', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('outline_id')->unsigned()->indexed();
            $table->foreign('outline_id')->references('id')->on('outlines');
            $table->string('title');
            $table->longText('text');
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
		Schema::drop('miscellaneous');
	}

}