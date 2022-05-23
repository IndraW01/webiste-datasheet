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
        Schema::create('control_valve_pneumatics', function (Blueprint $table) {
            $table->id();
            $table->string('datasheet', 10)->unique();
            $table->string('function');
            $table->string('output_signal');
            $table->string('control_modes');
            $table->string('output_action');
            $table->string('mounting');
            $table->string('weather_proof');
            $table->string('repeatabiity');
            $table->string('certifications');
            $table->string('hazardous');
            $table->string('suply_in');
            $table->string('instrument_gas');
            $table->string('filter_regulator');
            $table->string('controller_pneumatic');
            $table->string('suply');
            $table->string('output');
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
        Schema::dropIfExists('control_valve_pneumatics');
    }
};
