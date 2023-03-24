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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('Gold')->nullable();
            $table->string('Silver')->nullable();
            $table->string('BankAccount1')->nullable();
            $table->string('BankAccount2')->nullable();
            $table->string('SavingAccount')->nullable();
            $table->string('Cash_in_Hand')->nullable();
            $table->string('Committee')->nullable();
            $table->string('other_savings')->nullable();
            $table->string('investments')->nullable();
            $table->string('money_owned_to_you')->nullable();
            $table->timestamps();
        });
        Schema::table('assets', function (Blueprint $table) {
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
        Schema::dropIfExists('assets');
    }
};
