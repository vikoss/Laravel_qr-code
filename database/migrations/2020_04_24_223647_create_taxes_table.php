<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('qrCodeNicolasRomero')->create('taxes', function (Blueprint $table) {
            $table->id();
            
            $table->uuid('uuid')->unique()->index();
            
            $table->string('EXP')->nullable();
            $table->string('CLAVE_Y_VALOR_CATASTRAL')->nullable();
            $table->string('NO_ADEUDO_PREDIAL')->nullable();
            $table->string('APORTACIONES_MEJORAS')->nullable();
            $table->string('ESTADO')->nullable();
            $table->string('CLAVE_CAT')->nullable();
            $table->string('NOMBRE')->nullable();
            $table->string('PAGO_PREDIO')->nullable();
            $table->string('FECHA_DE_PAGO_PREDIAL')->nullable();
            $table->string('PAGO_CERT_CATASTRO')->nullable();
            $table->string('FECHA_DE_PAGO_CERTIFICACION')->nullable();
            $table->string('PAGO_NO_ADEUDO')->nullable();
            $table->string('FECHA_DE_PAGO_NO_ADEUDO')->nullable();
            $table->string('PAGO_MEJORAS')->nullable();
            $table->string('FECHA_DE_PAGO_MEJORAS')->nullable();
            $table->string('FECHA_EMISION')->nullable();
            $table->string('VIGENCIA')->nullable();

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
        Schema::connection('qrCodeNicolasRomero')->dropIfExists('taxes');
    }
}
