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
        Schema::create('user_profiles_medicalservices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_profiles_id')->constrained('user_profiles','id');
            $table->foreignId('medicalservice_id')->constrained('medicalservices','id');
            // $table->foreignId('addiction_id')->constrained('addictions','id');            
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
        Schema::dropIfExists('user_profiles_med_adis');
    }
};
