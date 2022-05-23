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
        Schema::create('control_valve_actuators', function (Blueprint $table) {
            $table->id();
            $table->string('datasheet', 10)->unique();
            $table->string('actuator');
            $table->string('travel');
            $table->string('bench');
            $table->string('supply');
            $table->string('air_supply');
            $table->string('to_actuator');
            $table->string('fails_valve');
            $table->string('handwheel');
            $table->string('hydrostatic');
            $table->string('mounting');
            $table->string('lockup');
            $table->string('mechanical_position');
            $table->string('mechanical_stopper');
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
        Schema::dropIfExists('control_valve_actuators');
    }
};
