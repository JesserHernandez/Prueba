<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicationlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicationlows', function (Blueprint $table) {
            $table->increments('Id_MedicationLow');
            $table->string('MedicationLowCode')->unique();
            $table->string('Motive');
            $table->string('Observations');
            $table->date('DateLeaving');
            $table->boolean('Condition');
            $table->integer('Id_Medicine')->unsigned();
            $table->foreign('Id_Medicine')->references('Id_Medicine')->on('medicines')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('medicationlows');
    }
}
