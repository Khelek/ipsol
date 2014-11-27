<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
            $table->string('name');
            $table->string('slug');
			$table->timestamps();
		});

        // Creates the  (Many-to-Many relation) table
        Schema::create('category_work', function ($table) {
            $table->increments('id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('work_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('work_id')->references('id')->on('works');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');
		Schema::drop('category_work');
	}

}
