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
            $table->uuid('vehicle_uuid')->unique()->index();
            $table->string('mileage')->nullable();
            $table->string('type')->nullable();
            $table->string('liters')->nullable();
            $table->string('ticket_id')->nullable();
            $table->string('ticket_amount')->nullable();
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
