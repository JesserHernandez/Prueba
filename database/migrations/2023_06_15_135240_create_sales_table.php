<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('Id_Sale');
            $table->string('SaleCode')->unique();
            $table->double('PaymentAmount');
            $table->double('PaymentChange');
            $table->integer('ProductQuantity');
            $table->double('SubTotal');
            $table->double('Descount');
            $table->double('Total');
            $table->integer('Id_Order')->unsigned();
            $table->integer('Id_Customer')->unsigned();
            $table->integer('Id_Employee')->unsigned();
            $table->foreign('Id_Order')->references('Id_Order')->on('orders')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sales');
    }
}
