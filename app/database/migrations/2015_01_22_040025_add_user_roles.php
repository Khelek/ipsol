<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserRoles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('users', function ($table) {
            $table->boolean('admin')->default(false);
            $table->boolean('content_manager')->default(false);
            $table->boolean('manager')->default(false);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('users', function ($table) {
            $table->dropColumn('admin');
            $table->dropColumn('content_manager');
            $table->dropColumn('manager');
        });
	}

}
