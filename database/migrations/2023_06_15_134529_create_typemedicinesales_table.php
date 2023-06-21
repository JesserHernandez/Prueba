<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypemedicinesalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typemedicinesales', function (Blueprint $table) {
            $table->increments('Id_TypemedicineSales');
            $table->string('TypeMedicineSaleCode')->unique();
            $table->string('TypeMedicineSale')->unique();
            $table->string('Description');
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
        Schema::dropIfExists('typemedicinesales');
    }
}
