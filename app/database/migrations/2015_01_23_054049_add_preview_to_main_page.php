<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPreviewToMainPage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('news', function(Blueprint $table) {
			$table->string('preview_for_main_page')->nullable();
		});
		Schema::table('works', function(Blueprint $table) {
			$table->string('preview_for_main_page')->nullable();
		});
		Schema::table('security_tips', function(Blueprint $table) {
			$table->string('preview_for_main_page')->nullable();
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
			$table->dropColumn('preview_for_main_page');
		});
		Schema::table('works', function(Blueprint $table) {
			$table->dropColumn('preview_for_main_page');
		});
		Schema::table('security_tips', function(Blueprint $table) {
			$table->dropColumn('preview_for_main_page');
		});
	}

}
