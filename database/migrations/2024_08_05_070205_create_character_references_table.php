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
        Schema::create('character_references', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reference_number');
            $table->string('house_name_or_number');
            $table->string('street_name');
            $table->string('city_or_town');
            $table->string('post_code');
            $table->string('year_known');
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
        Schema::dropIfExists('character_references');
    }
};
