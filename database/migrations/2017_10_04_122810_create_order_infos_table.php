<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_infos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('email');
            $table->string('namaPenerima');
            $table->string('noHPPenerima');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kodePos');
            $table->integer('orderId')->unsigned();
            $table->foreign('orderId')->references('id')->on('orders');

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
        Schema::dropIfExists('order_infos');
    }
}
