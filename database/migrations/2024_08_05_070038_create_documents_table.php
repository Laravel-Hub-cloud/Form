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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();  
            $table->string('ni_number');
            $table->string('proof_of_ni_number');
            $table->enum('right_to_work_in_uk', ['Yes', 'No']);
            $table->string('proof_of_right_to_work');
            $table->enum('require_brp_visa', ['Yes', 'No']);
            $table->string('brp_visa_copy')->nullable();
            $table->enum('hold_sia_license', ['Yes', 'No']);
            $table->string('sia_license_picture')->nullable();
            $table->string('sia_license_number')->nullable();
            $table->date('sia_license_expiry')->nullable();
            $table->enum('hold_dbs_certificate', ['Yes', 'No']);
            $table->string('dbs_certificate_copy')->nullable();
            
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
        Schema::dropIfExists('documents');
    }
};
