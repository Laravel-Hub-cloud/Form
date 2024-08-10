<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_disabilities', function (Blueprint $table) {
            $table->id();
            $table->boolean('has_disability')->default(false);
    $table->text('disability_details')->nullable();
    $table->boolean('advised_no_night_shift')->default(false);
    $table->boolean('fitness_to_work_certificate')->default(false);
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
        Schema::dropIfExists('health_disabilities');
    }
};
