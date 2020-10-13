<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('fuelStation')->create('refills', function (Blueprint $table) {
            $table->id();
            $table->uuid('vehicle_uuid');
            $table->integer('mileage');
            $table->set('type', ['Magna', 'Premium', 'Diesel', 'Gas L.P.']);
            $table->decimal('liters', 11, 4);
            $table->string('ticket_id');
            $table->decimal('ticket_amount', 11, 4);
            $table->string('invoice')->nullable();
            $table->smallInteger('additives')->nullable();
            // Preguntar si es necesario guardar el precio de los aditivos o solo con el ticket amount
            $table->decimal('amount_additives', 11, 4)->nullable();
            $table->softDeletes();
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
        Schema::connection('fuelStation')->dropIfExists('refills');
    }
}
