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
        Schema::create('serviceusers', function (Blueprint $table) {
            $table->id();
            $table->string('home_office_ref');
            $table->string('legal_status');
            $table->string('assessment_method');
            $table->string('assessor_name');
            $table->string('title');
            $table->string('first_name');
            $table->string('sur_name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('postal_code');
            $table->string('ethnicity');
            $table->string('language');
            $table->string('is_interpreter_required');
            $table->string('dof');
            $table->string('nino');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('spouse_in_uk');
            $table->string('religion');
            $table->string('total_no_in_house');
            $table->string('is_agree');
            $table->timestamps();
        });
        Schema::table('serviceusers', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serviceusers');
    }
};
