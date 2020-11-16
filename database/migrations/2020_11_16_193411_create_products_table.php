<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->string('brand');
            $table->string('model');
            $table->string('connectivity');
            $table->string('processor');
            $table->string('type');
            $table->string('screen_resolution');
            $table->integer('price');
            $table->integer('core');
            $table->integer('ram');
            $table->integer('storage');
            $table->integer('battery_capacity');
            $table->integer('battery_duration');
            $table->integer('weight');
            $table->integer('ssh');
            $table->integer('hdd');
            $table->integer('usb');
            $table->integer('screen_size');
            $table->integer('hdmi');
            $table->boolean('nfc');
            $table->boolean('gps');
            $table->boolean('waterproofness');
            $table->boolean('fastcharging');
            $table->boolean('webcam');
            $table->boolean('numeric_keyboard');
            $table->boolean('lighting_keyboard');
            $table->boolean('pc_mechanic');
            $table->boolean('sleep_monitoring');
            $table->boolean('calorie');
            $table->boolean('floors');
            $table->boolean('barometer');
            $table->boolean('altimeter');
            $table->boolean('smart');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
