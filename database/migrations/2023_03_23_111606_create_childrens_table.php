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
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->string('Childname');
            $table->string('ChildGender');
            $table->timestamps();
        });
        Schema::table('childrens', function (Blueprint $table) {
            $table->unsignedBigInteger('serviceuser_id');
            $table->unsignedBigInteger('partner_id');

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
        Schema::dropIfExists('childrens');
    }
};
