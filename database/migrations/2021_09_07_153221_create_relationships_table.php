<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('graduationPhotos')->create('relationships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invite_id')->constrained();
            $table->foreignId('relationship_type_id')->constrained()->onDelete('cascade');
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
        Schema::connection('graduationPhotos')->dropIfExists('relationships');
    }
}
