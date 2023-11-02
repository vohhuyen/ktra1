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
        Schema::create('products', function (Blueprint $products) {
            $products->id();
            $products->string('name');
            $products->string('image');
            $products->string('category');
            $products->integer('price')->unsigned();
            $products->integer('sale_price')->unsigned();
            $products->integer('quantity')->unsigned();
            $products->string('description')->nullable($value = true);
            $products->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table');
    }
};
