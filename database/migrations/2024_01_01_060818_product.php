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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id')->index('category_id_foreign');
            $table->string('product_name');
            $table->integer('product_price');
            $table->text('product_description');
            $table->string('product_image_path');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category_master')->onUpdate('cascade')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
