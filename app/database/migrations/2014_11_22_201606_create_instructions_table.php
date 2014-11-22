<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('instructions', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->string('name');

            $table->string('instruction_file_name')->nullable();
			$table->integer('instruction_file_size')->nullable();
			$table->string('instruction_content_type')->nullable();
			$table->timestamp('instruction_updated_at')->nullable();

            $table->string('documentation_file_name')->nullable();
			$table->integer('documentation_file_size')->nullable();
			$table->string('documentation_content_type')->nullable();
			$table->timestamp('documentation_updated_at')->nullable();

            $table->string('certificate_file_name')->nullable();
			$table->integer('certificate_file_size')->nullable();
			$table->string('certificate_content_type')->nullable();
			$table->timestamp('certificate_updated_at')->nullable();

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
		Schema::drop('instructions');
	}

}
