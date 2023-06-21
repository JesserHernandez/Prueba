<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('Id_Medicine');
            $table->string('MedicineCode')->unique();
            $table->string('Medicine');
            $table->string('Indication');
            $table->string('Ingredient');
            $table->string('Contraindication');
            $table->string('SideEffect');
            $table->string('Dosage');
            $table->string('Storage');
            $table->string('Interaction');
            $table->string('Precaution');
            $table->string('Quality');
            $table->double('PurchasePrice');
            $table->double('SalePrice');
            $table->string('Image');
            $table->string('ExpirationDate');
            $table->integer('Amount');
            $table->boolean('Condition');
            $table->integer('Id_Brand')->unsigned();
            $table->integer('Id_TypeMedicine')->unsigned();
            $table->integer('Id_TypemedicineSales')->unsigned();
            $table->integer('Id_Laboratory')->unsigned();
            $table->foreign('Id_Brand')->references('Id_Brand')->on('brands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Id_TypeMedicine')->references('Id_TypeMedicine')->on('typemedicines')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Id_TypemedicineSales')->references('Id_TypemedicineSales')->on('typemedicinesales')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Id_Laboratory')->references('Id_Laboratory')->on('laboratories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('medicines');
    }
}
