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
            $table->increments('id');
            $table->string('name')->comment('product name');
            $table->bigInteger('producer_id')->comment('producer info');
            $table->decimal('price')->comment('product price');
            $table->double('promotional_price')->comment('product promotional_price');
            $table->bigInteger('categories_id')->comment('caterogy info');
            $table->bigInteger('quatity')->comment('product quanity');
            $table->string('discount_end_date')->comment('discount end date');
            $table->longText('description')->comment('description product');
            $table->bigInteger('configuration_id')->comment('product configuration');
            $table->enum('status', ['0', '1'])->comment('status of product, 0:stocking, 1: Out of stock');
            $table->timestamps();
            $table->softDeletes();
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
