<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banners', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->string('name');
			$table->string('url');
			$table->boolean('view_in_news')->nullable();

            $table->string('img_file_name')->nullable();
			$table->integer('img_file_size')->nullable();
			$table->string('img_content_type')->nullable();
			$table->timestamp('img_updated_at')->nullable();

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
		Schema::drop('banners');
	}

}
