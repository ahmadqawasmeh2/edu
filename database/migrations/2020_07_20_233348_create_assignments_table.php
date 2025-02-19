<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('assignments')){
			Schema::create('assignments', function(Blueprint $table)
			{
				$table->bigInteger('id', true)->unsigned();
				$table->integer('user_id');
				$table->integer('instructor_id')->nullable();
				$table->integer('course_id');
				$table->integer('chapter_id')->nullable();
				$table->string('title', 191);
				$table->string('detail', 191)->nullable();
				$table->string('url', 191)->nullable();
				$table->string('assignment', 191)->nullable();
				$table->boolean('type')->default(1);
				$table->integer('rating')->nullable();
				$table->timestamps();
			});
		}
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('assignments');
	}

}
