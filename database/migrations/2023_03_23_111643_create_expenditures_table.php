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
        Schema::create('expenditures', function (Blueprint $table) {
            $table->id();
            $table->string('rent')->nullable();
            $table->string('mortgage')->nullable();
            $table->string('Gas')->nullable();
            $table->string('Electricity')->nullable();
            $table->string('Water')->nullable();
            $table->string('Council_Tax')->nullable();
            $table->string('insurance')->nullable();
            $table->string('Telephone')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('TV_Licence')->nullable();
            $table->string('Broadband')->nullable();
            $table->string('Sky_package')->nullable();
            $table->string('Credit_card')->nullable();
            $table->string('Store_Cards')->nullable();
            $table->string('Food')->nullable();
            $table->string('Clothing')->nullable();
            $table->string('Transport')->nullable();
            $table->string('Loans')->nullable();
            $table->string('Car_Payment')->nullable();
            $table->string('Car_insurance')->nullable();
            $table->string('Fuel')->nullable();
            $table->string('Bank')->nullable();
            $table->string('Solicitors')->nullable();
            $table->string('Family_aboard')->nullable();
            $table->string('other')->nullable();
            $table->timestamps();
        });
        Schema::table('expenditures', function (Blueprint $table) {
            $table->unsignedBigInteger('serviceuser_id');

            $table->foreign('serviceuser_id')->references('id')->on('serviceusers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenditures');
    }
};
