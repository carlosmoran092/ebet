<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quotations', function(Blueprint $table)
	{
		$table->increments('id');
		$table->integer('user_id');
		$table->integer('id_service');
		$table->date('created');
		$table->string('delivery_date');
		$table->decimal('amount', 6, 2);	
		$table->string('status');
		$table->text('experts');
		$table->string('original_language');
		$table->string('target_language');
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
		Schema::drop('quotations');
	}

}
