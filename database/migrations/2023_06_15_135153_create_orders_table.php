<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('Id_Order');
            $table->string('OrderCode')->unique();
            $table->string('PhoneNumber')->unique();
            $table->string('Address');
            $table->double('ProductQuantity');
            $table->boolean('Condition');
            $table->integer('Id_Medicine')->unsigned();
            $table->integer('Id_Customer')->unsigned();
            $table->integer('Id_Employee')->unsigned();
            $table->foreign('Id_Medicine')->references('Id_Medicine')->on('medicines')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Id_Customer')->references('Id_Customer')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Id_Employee')->references('Id_Employee')->on('employees')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('orders');
    }
}
