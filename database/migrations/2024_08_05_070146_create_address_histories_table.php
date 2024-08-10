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
        Schema::create('address_histories', function (Blueprint $table) {
            $table->id();
            $table->string('current_address');
            $table->string('house_name_or_number');
            $table->string('street_name');
            $table->string('city_or_town');
            $table->string('country');
            $table->string('post_code');
            $table->date('date_from');
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
        Schema::dropIfExists('address_histories');
    }
};
