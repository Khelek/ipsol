<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function(Blueprint $table) {
			$table->increments('id');
            $table->string('name');
			$table->timestamps();
		});

        // Creates the  (Many-to-Many relation) table
        Schema::create('post_tag', function ($table) {
            $table->increments('id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');
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
		Schema::drop('tags');
		Schema::drop('post_tag');
	}

}
