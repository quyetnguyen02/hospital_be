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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name')->comment('customer name order');
            $table->string('phone')->comment('number phone of custmer');
            $table->string('email')->comment('email of customer');
            $table->enum('receive_good', ['0', '1'])->comment('receive good of order, 0: pick up at the store, 1: pick up at the home');
            $table->string('address_receive_good')->comment('address receive good  customer');
            $table->string('note')->comment('note of customer')->nullable();
            $table->enum('payment_status', ['0', '1'])->comment('payment status of order');
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
        Schema::dropIfExists('orders');
    }
};
