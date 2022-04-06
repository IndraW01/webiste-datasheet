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
        Schema::create('control_valve_generals', function (Blueprint $table) {
            $table->id();
            $table->string('tag_no')->unique();
            $table->string('p_id_number')->unique();
            $table->string('line_number')->unique();
            $table->string('line_size');
            $table->string('valve_service_type');
            $table->integer('quantity');
            $table->string('service');
            $table->string('piping_class');
            $table->string('schedule');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('control_valve_generals');
    }
};
