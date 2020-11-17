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
            $table->text('description')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('connectivity')->nullable();
            $table->string('processor')->nullable();
            $table->string('type')->nullable();
            $table->string('screen_resolution')->nullable();
            $table->integer('price')->nullable();
            $table->integer('core')->nullable();
            $table->integer('ram')->nullable();
            $table->integer('storage')->nullable();
            $table->integer('battery_capacity')->nullable();
            $table->integer('battery_duration')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('ssd')->nullable();
            $table->integer('hdd')->nullable();
            $table->integer('usb')->nullable();
            $table->integer('screen_size')->nullable();
            $table->integer('hdmi')->nullable();
            $table->boolean('nfc')->nullable();
            $table->boolean('gps')->nullable();
            $table->boolean('waterproofness')->nullable();
            $table->boolean('fastcharging')->nullable();
            $table->boolean('webcam')->nullable();
            $table->boolean('numeric_keyboard')->nullable();
            $table->boolean('lighting_keyboard')->nullable();
            $table->boolean('pc_mechanic')->nullable();
            $table->boolean('sleep_monitoring')->nullable();
            $table->boolean('calorie')->nullable();
            $table->boolean('floors')->nullable();
            $table->boolean('barometer')->nullable();
            $table->boolean('altimeter')->nullable();
            $table->boolean('smart')->nullable();
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
