<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageAvailablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('language_availables', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('title');
			$table->string('patch_image');
			$table->string('iso_code');
			$table->string('language_family');
			$table->text('target_languages');
			$table->integer('active');
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
		Schema::drop('language_availables');
	}

}
