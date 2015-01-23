<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixPreviewPhotosOnMainPage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('news', function(Blueprint $table) {
			$table->string('photo_preview_for_main_file_name')->nullable();
			$table->integer('photo_preview_for_main_file_size')->nullable();
			$table->string('photo_preview_for_main_content_type')->nullable();
			$table->timestamp('photo_preview_for_main_updated_at')->nullable();
		});
		Schema::table('works', function(Blueprint $table) {
			$table->string('photo_preview_for_main_file_name')->nullable();
			$table->integer('photo_preview_for_main_file_size')->nullable();
			$table->string('photo_preview_for_main_content_type')->nullable();
			$table->timestamp('photo_preview_for_main_updated_at')->nullable();
		});
		Schema::table('security_tips', function(Blueprint $table) {
			$table->string('photo_preview_for_main_file_name')->nullable();
			$table->integer('photo_preview_for_main_file_size')->nullable();
			$table->string('photo_preview_for_main_content_type')->nullable();
			$table->timestamp('photo_preview_for_main_updated_at')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('news', function(Blueprint $table) {
			$table->dropColumn('photo_preview_for_main_file_name');
			$table->dropColumn('photo_preview_for_main_file_size');
			$table->dropColumn('photo_preview_for_main_content_type');
			$table->dropColumn('photo_preview_for_main_updated_at');
		});
		Schema::table('works', function(Blueprint $table) {
			$table->dropColumn('photo_preview_for_main_file_name');
			$table->dropColumn('photo_preview_for_main_file_size');
			$table->dropColumn('photo_preview_for_main_content_type');
			$table->dropColumn('photo_preview_for_main_updated_at');
		});
		Schema::table('security_tips', function(Blueprint $table) {
			$table->dropColumn('photo_preview_for_main_file_name');
			$table->dropColumn('photo_preview_for_main_file_size');
			$table->dropColumn('photo_preview_for_main_content_type');
			$table->dropColumn('photo_preview_for_main_updated_at');
		});
	}

}
