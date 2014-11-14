<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequirementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requirements', function(Blueprint $table)
		{
			$table->increments('id');
         $table->integer('outline_id')->unsigned()->indexed();
         $table->foreign('outline_id')->references('id')->on('outlines');
         $table->string('title');
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
		Schema::drop('requirements');
	}

}
