<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function (Blueprint $table) {
			$table->id();
			$table->foreignId('brand_id');
			$table->string('name')->unique();
			$table->text('description');
			$table->integer('price');
			$table->string('image');
			$table->boolean('display_sizes')->default(true);
			$table->boolean('display_colors')->default(true);
			$table->string('slug')->unique();
			$table->boolean('available')->default(true);
			$table->timestamp('deleted_at')->nullable();
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
		Schema::dropIfExists('products');
	}
}
