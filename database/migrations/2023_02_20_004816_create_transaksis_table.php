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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('travel_package_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('addtional_visa');
            $table->integer('total_transaksi');
            $table->enum('status_transaksi', ['sudah', 'belum']);
            $table->timestamps();

            $table->foreign('travel_package_id')->references('id')->on('travel_packages')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
