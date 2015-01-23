<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDepartamentAndQuestion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('tickets', function(Blueprint $table) {
			$table->string('departament')->nullable();
			$table->string('question')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('tickets', function(Blueprint $table) {
			$table->dropColumn('departament');
			$table->dropColumn('question');
		});
	}

}
