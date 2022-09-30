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
        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpu')->comment('cpu product');
            $table->string('gpu1')->comment('gpu1 instant product');
            $table->string('gpu2')->comment('gpu2 instant product')->nullable();
            $table->string('rom')->comment('rom of product');
            $table->string('ram')->comment('ram of product');
            $table->integer('slot_ram')->comment('slot ram of product')->nullable();
            $table->integer('slot_rom')->comment('slot rom of product')->nullable();
            $table->string('auto_chip')->comment('auto chip of  product')->nullable();
            $table->string('speakers')->comment('speakers product')->nullable();
            $table->string('camera')->comment('camera of product')->nullable();
            $table->string('microphone')->comment('microphone product')->nullable();
            $table->string('battery')->comment('battery product')->nullable();
            $table->string('screen')->comment('screen product')->nullable();
            $table->string('keyboard')->comment('keyboard product')->nullable();
            $table->string('color')->comment('color product')->nullable();
            $table->string('surface_reatment')->comment('surface reatment product')->nullable();
            $table->double('weight')->comment('weight product')->nullable();
            $table->string('operating_system')->comment('operating system product')->nullable();
            $table->string('ethermet')->comment('ethermet product')->nullable();
            $table->string('wlan_bluetooth')->comment('wlan bluetooth product')->nullable();
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
        Schema::dropIfExists('configurations');
    }
};
