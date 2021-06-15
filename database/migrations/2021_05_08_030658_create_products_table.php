<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('product_code')->nullable();
            $table->string('product_name');
            $table->string('product_img')->nullable();
            $table->string('product_img2')->nullable();
            $table->string('product_img3')->nullable();
            $table->string('product_img4')->nullable();
            $table->bigInteger('product_price');
            $table->text('product_description')->nullable();
            $table->date('product_store')->nullable(); //produk masuk
            $table->date('product_exp')->nullable(); //kadaluarsa
            $table->date('product_trade_status')->nullable();
            $table->unsignedBigInteger('categories_id');
            $table->timestamps();
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
}
