<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('namaPenerima');
            $table->string('noHPPenerima');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kodePos');
            $table->boolean('default');

            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users');

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
        Schema::dropIfExists('user_addresses');
    }
}
