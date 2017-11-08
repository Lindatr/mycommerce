<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('orderId')->unsigned();
            $table->foreign('orderId')->references('id')->on('orders');
            $table->integer('productDetailsId')->unsigned();
            $table->foreign('productDetailsId')->references('id')->on('product_details');
            
            $table->integer('qty');
            $table->decimal('price');
            
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
        Schema::dropIfExists('order_details');
    }
}
