<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('Id_Purchase');
            $table->string('PurchaseCode')->unique();
            $table->double('PaymentAmount');
            $table->double('PaymentChange');
            $table->double('ProductQuantity');
            $table->double('SubTotal');
            $table->double('Descount');
            $table->double('Total');
            $table->integer('Id_Medicine')->unsigned();
            $table->integer('Id_Supplier')->unsigned();
            $table->integer('Id_Employee')->unsigned();
            $table->foreign('Id_Medicine')->references('Id_Medicine')->on('medicines')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Id_Supplier')->references('Id_Supplier')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('purchases');
    }
}
