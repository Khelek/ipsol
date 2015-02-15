<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCascadeDeleteAndIndexes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('categories', function ($table) {
			$table->index('slug');
		});
        Schema::table('rubrics', function ($table) {
			$table->index('name');
		});
        Schema::table('post_rubric', function ($table) {
            $table->dropForeign('post_rubric_rubric_id_foreign');
            $table->dropForeign('post_rubric_post_id_foreign');
            $table->foreign('rubric_id')->references('id')->on('rubrics')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
        Schema::table('category_work', function ($table) {
            $table->dropForeign('category_work_category_id_foreign');
            $table->dropForeign('category_work_work_id_foreign');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('work_id')->references('id')->on('works')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('categories', function ($table) {
			$table->dropIndex('categories_slug_index');
		});
        Schema::table('rubrics', function ($table) {
			$table->dropIndex('rubrics_name_index');
		});
        Schema::table('post_rubric', function ($table) {
            $table->dropForeign('post_rubric_rubric_id_foreign');
            $table->dropForeign('post_rubric_post_id_foreign');
            $table->foreign('rubric_id')->references('id')->on('rubrics');
            $table->foreign('post_id')->references('id')->on('posts');
        });
        Schema::table('category_work', function ($table) {
            $table->dropForeign('category_work_category_id_foreign');
            $table->dropForeign('category_work_work_id_foreign');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('work_id')->references('id')->on('works');
        });
	}

}
