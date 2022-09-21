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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('price');
            $table->unsignedBigInteger('manufacturers_id');
            $table->unsignedBigInteger('parttypes_id');
            $table->longText('desc')->nullable();
            $table->string('barcode');
            $table->timestamps();
            $table->foreign('manufacturers_id')->references('id')->on('manufacturers')->onDelete('cascade');
            $table->foreign('parttypes_id')->references('id')->on('parttypes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
