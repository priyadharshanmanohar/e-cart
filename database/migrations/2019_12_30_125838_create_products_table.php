<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('title',255);
            $table->string('description',255);
            $table->string('product_price',255);
            $table->string('barcode')->unique();
            $table->string('base_product_id')->unique();
            $table->enum('product_type',['accessory','cosmetics','apparel']);
            $table->timestamps();
            $table->primary('base_product_id');
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
