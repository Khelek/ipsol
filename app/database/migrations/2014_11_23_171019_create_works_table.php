<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('works', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('quest_description');
			$table->text('client_name');
			$table->text('client_post');
			$table->text('client_description');
			$table->text('solution_content');
			$table->string('meta_title')->nullable();
			$table->string('meta_description')->nullable();
			$table->string('meta_keywords')->nullable();
			$table->boolean('need_big_preview')->nullable();

            // превью и большое превью
            $table->string('preview_file_name')->nullable();
			$table->integer('preview_file_size')->nullable();
			$table->string('preview_content_type')->nullable();
			$table->timestamp('preview_updated_at')->nullable();

            $table->string('big_preview_file_name')->nullable();
			$table->integer('big_preview_file_size')->nullable();
			$table->string('big_preview_content_type')->nullable();
			$table->timestamp('big_preview_updated_at')->nullable();
            // end превью и большое превью

            // три фотографии
            $table->string('main_photo_file_name')->nullable();
			$table->integer('main_photo_file_size')->nullable();
			$table->string('main_photo_content_type')->nullable();
			$table->timestamp('main_photo_updated_at')->nullable();

            $table->string('second_photo_file_name')->nullable();
			$table->integer('second_photo_file_size')->nullable();
			$table->string('second_photo_content_type')->nullable();
			$table->timestamp('second_photo_updated_at')->nullable();

            $table->string('third_photo_file_name')->nullable();
			$table->integer('third_photo_file_size')->nullable();
			$table->string('third_photo_content_type')->nullable();
			$table->timestamp('third_photo_updated_at')->nullable();
            // end три фотографии

            //фото клиента
            $table->string('client_photo_file_name')->nullable();
			$table->integer('client_photo_file_size')->nullable();
			$table->string('client_photo_content_type')->nullable();
			$table->timestamp('client_photo_updated_at')->nullable();
            //

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
		Schema::drop('works');
	}

}
