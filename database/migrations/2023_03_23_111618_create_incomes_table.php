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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();

            $table->string('wage')->nullable();
            $table->string('Self-Employment')->nullable();
            $table->string('income_support')->nullable();
            $table->string('JSA')->nullable();
            $table->string('ESA')->nullable();
            $table->string('Universal_Credit')->nullable();
            $table->string('Pension_Credit')->nullable();
            $table->string('Tax-Credit')->nullable();
            $table->string('Child_Benefit')->nullable();
            $table->string('other_Charities')->nullable();
            $table->string('Family_support')->nullable();
            $table->string('other1')->nullable();
            $table->string('other2')->nullable();

            $table->timestamps();
        });
        Schema::table('incomes', function (Blueprint $table) {
            $table->unsignedBigInteger('serviceuser_id')->nullable();
            $table->unsignedBigInteger('partner_id')->nullable();


            $table->foreign('serviceuser_id')->references('id')->on('serviceusers');
            $table->foreign('partner_id')->references('id')->on('partners');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incomes');
    }
};
