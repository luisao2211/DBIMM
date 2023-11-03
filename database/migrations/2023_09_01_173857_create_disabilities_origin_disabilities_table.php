<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disabilitiesorigindisabilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_disabilities')->constrained('disabilities','id');
            $table->foreignId('id_disabilityorigins')->constrained('disabilityorigins','id');
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disabilitiesorigindisabilities');
    }
};
