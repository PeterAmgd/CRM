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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('DOB');
            $table->string('NINO');
            $table->timestamps();
        });
        Schema::table('partners', function (Blueprint $table) {
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
        Schema::dropIfExists('partners');
    }
};
