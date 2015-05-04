<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_item', function(Blueprint $table)
		{
			$table->integer('order_id')->unsigned()->index();
			$table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
			$table->integer('product_id')->unsigned()->index();
			$table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');

			$table->integer("quantity");
			$table->float("price");

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_item');
	}

}
