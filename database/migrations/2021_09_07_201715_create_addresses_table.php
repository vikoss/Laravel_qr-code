<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('graduationPhotos')->create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street')->nullable();
            $table->string('colony')->nullable();
            $table->string('city')->nullable();
            $table->string('state_code')->nullable();
            // Alcaldia
            $table->string('town')->nullable();
            $table->unsignedInteger('cp')->nullable();
            $table->foreignId('person_id')->constrained()->onDelete('cascade');
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
        Schema::connection('graduationPhotos')->dropIfExists('addresses');
    }
}
