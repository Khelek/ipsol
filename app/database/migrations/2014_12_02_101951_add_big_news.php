<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBigNews extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('big_news', function(Blueprint $table) {
			$table->increments('id')->unsigned();
            $table->integer('news_id')->unsigned();
            $table->foreign('news_id')->references('id')->on('news');
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
		Schema::drop('big_news');
	}

}
