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
        Schema::create('control_valve_elements', function (Blueprint $table) {
            $table->id();
            $table->string('datasheet', 10)->unique();
            $table->string('element_type');
            $table->string('element_material');
            $table->string('body_material');
            $table->string('flange_material');
            $table->string('bolt_and_nut');
            $table->string('fill_fluid');
            $table->string('painting');
            $table->string('instrument_range');
            $table->string('calibration_range');
            $table->string('scale');
            $table->string('static_pressure');
            $table->string('model_no');
            $table->string('manufacture');
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
        Schema::dropIfExists('control_valve_elements');
    }
};
