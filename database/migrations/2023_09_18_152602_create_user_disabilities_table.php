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
        Schema::create('user_disabilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_datageneral_id')->constrained('user_datageneral','id');
            $table->foreignId('disability_id')->constrained('disabilities','id');
            $table->foreignId('origin_id')->constrained('origins','id');
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
        Schema::dropIfExists('user_disabilities');
    }
};
