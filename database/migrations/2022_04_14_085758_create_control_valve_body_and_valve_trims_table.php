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
        Schema::create('control_valve_body_and_valve_trims', function (Blueprint $table) {
            $table->id();
            $table->string('datasheet', 10)->unique();
            $table->string('manufacturer');
            $table->string('valve_body_type');
            $table->string('body_size');
            $table->string('end_connect_size');
            $table->string('connect_type_rating');
            $table->string('flange_face_finish')->nullable();
            $table->string('valve_rated_cv');
            $table->string('body_material');
            $table->string('plug_material');
            $table->string('seat_material');
            $table->string('seal_material');
            $table->string('stem_material');
            $table->string('bolt_nut_material');
            $table->string('packing_type_material');
            $table->string('flow_direction');
            $table->string('shut_off');
            $table->string('model_no');
            $table->string('trim_charac');
            $table->string('port_size');
            $table->string('outlet');
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
        Schema::dropIfExists('control_valve_body_and_valve_trims');
    }
};
