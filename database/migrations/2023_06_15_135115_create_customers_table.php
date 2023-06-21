<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('Id_Customer');
            $table->string('CustomerCode')->unique();
            $table->string('Names');
            $table->string('FirstSurName');
            $table->string('SecondSurName');
            $table->string('IdentificationCard')->unique();
            $table->integer('Age');
            $table->string('Gender');
            $table->string('Address');
            $table->string('PhoneNumber')->unique();
            $table->string('EmailAddress')->unique();
            $table->string('City');
            $table->string('Municipality');
            $table->string('Image');
            $table->boolean('Condition');
            $table->integer('Id_User')->unsigned();
            $table->foreign('Id_User')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('customers');
    }
}
