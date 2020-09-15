<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('fuelStation')->create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique()->index();
            $table->string('vehicle')->nullable();
            $table->string('plates')->nullable();
            $table->string('serie')->nullable();
            $table->string('brand')->nullable();
            $table->string('color')->nullable();
            $table->string('model')->nullable();
            $table->string('inventory')->nullable();
            $table->text('observations')->nullable();
            $table->integer('dependency_id');
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
        Schema::connection('fuelStation')->dropIfExists('vehicles');
    }
}
