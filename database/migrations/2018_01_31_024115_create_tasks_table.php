<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('assessment_id')->unsigned()->index('fk_tasks_assessment1_idx');
			$table->string('name')->nullable();
			$table->integer('task_number')->nullable();
			$table->string('hazards', 500)->nullable();
			$table->string('measures', 500)->nullable();
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
		Schema::drop('tasks');
	}

}
