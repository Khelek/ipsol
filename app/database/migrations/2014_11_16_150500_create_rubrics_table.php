<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRubricsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rubrics', function(Blueprint $table) {
			$table->increments('id');
            $table->string('name');
			$table->timestamps();
		});

        // Creates the  (Many-to-Many relation) table
        Schema::create('post_rubric', function ($table) {
            $table->increments('id')->unsigned();
            $table->integer('rubric_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->foreign('rubric_id')->references('id')->on('rubrics');
            $table->foreign('post_id')->references('id')->on('posts');
        });

	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rubrics');
		Schema::drop('post_rubric');
	}

}
