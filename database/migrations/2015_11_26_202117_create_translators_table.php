<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslatorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('translators', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('last_name');
			$table->string('username');
			$table->text('password');
			$table->string('gender');
			$table->string('birthday');
			$table->string('native_country');
			$table->string('residence_country');
			$table->string('email');
			$table->string('web_site');			
			$table->string('image_path');
			$table->string('idioms');
			$table->string('preferences');
			$table->text('professional_profile');
			$table->text('payment_information');
			$table->integer('state');
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
		Schema::drop('translators');
	}

}
