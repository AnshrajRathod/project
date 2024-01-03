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
        Schema::create('add_cart',function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('product_id')->index('product_id_foreign');
            $table->integer('quntity');
            $table->integer('price');
            $table->unsignedBigInteger('users_id')->index('users_id_foreign');
            $table->string('status');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('product')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('add_cart');
    }
};
