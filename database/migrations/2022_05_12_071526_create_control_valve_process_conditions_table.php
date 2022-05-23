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
        Schema::create('control_valve_process_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('datasheet', 10)->unique();
            $table->string('component');
            $table->string('cases');
            $table->string('fluid');
            $table->string('gas_flow');
            $table->string('liquid_flow');
            $table->string('upstream_pressure');
            $table->string('downstream_pressure');
            $table->string('design_pressure');
            $table->string('operating_temperature');
            $table->string('design_temperature');
            $table->string('viscosity');
            $table->string('density_ftp');
            $table->string('molecular_weight');
            $table->string('vapor_pressure_at');
            $table->string('sp_heat_ratio');
            $table->string('critical_pressure');
            $table->string('critical_temperature');
            $table->string('specific_gravity');
            $table->string('calculated_cv');
            $table->string('valve_opening');
            $table->string('flash_cav_chocked');
            $table->string('predicted_spl');
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
        Schema::dropIfExists('control_valve_process_conditions');
    }
};
