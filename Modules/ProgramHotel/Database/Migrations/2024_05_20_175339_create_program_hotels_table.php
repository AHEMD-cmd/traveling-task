<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('program_hotels', function (Blueprint $table) {
			$table->id();
			$table->foreignId('program_id')->constrained()->onDelete('cascade');
			$table->foreignId('city_id')->constrained()->onDelete('cascade');
			$table->foreignId('hotel_id')->constrained()->onDelete('cascade');
			$table->string('residence_type');
			$table->integer('num_of_days');
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
		Schema::dropIfExists('program_hotels');
	}
};
