<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoicesales', function (Blueprint $table) {
            $table->increments('Id_InvoiceSale');
            $table->string('InvoiceSaleCode')->unique();
            $table->date('BroadcastDate');
            $table->integer('Id_Sale')->unsigned();
            $table->integer('Id_Configuration')->unsigned();
            $table->foreign('Id_Sale')->references('Id_Sale')->on('sales')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Id_Configuration')->references('Id_Configuration')->on('configurations')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('invoicesales');
    }
}
