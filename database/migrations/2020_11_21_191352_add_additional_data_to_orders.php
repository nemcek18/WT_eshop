<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalDataToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->change();

            $table->integer('address_id')->nullable();
            $table->foreign('address_id')->references('id')->on('addresses');

            $table->string('name')->nullable();
            $table->string('surname')->nullable();

            $table->string('delivery');
            $table->string('payment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('user_id')->nullable(false)->change();

            $table->integer('address_id');

            $table->string('name');
            $table->string('surname');

            $table->string('delivery');
            $table->string('payment');
        });
    }
}
