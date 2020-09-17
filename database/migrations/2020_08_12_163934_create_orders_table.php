<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function (Blueprint $table) {
			$table->id();
			$table->foreignId('reviewer_id')->nullable()->constrained('users');
			$table->foreignId('user_id')->nullable()->constrained('users');
			$table->enum('status', [
				'pending', 'validated', 'rejected', 'suspended'
			])->default('pending');
			$table->string('lastname');
			$table->string('firstname');
			$table->string('address1');
			$table->string('address2')->nullable();
			$table->string('town');
			$table->string('zip')->nullable();
			$table->string('district');
			$table->string('email');
			$table->string('phone');
			$table->text('notes')->nullable();
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
		Schema::dropIfExists('orders');
	}
}
