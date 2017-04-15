<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('app_user_id');
            $table->string('dev_id');
            // $table->increments('id');
            $table->string('place_from_name');
            $table->string('place_to_name');
            $table->string('place_from_lat');
            $table->string('place_from_lng');
            $table->string('place_to_lat');
            $table->string('place_to_lng');
            $table->double('distance_m');
            $table->string('distance_k');
            $table->double('price_total');
            $table->integer('price_distance_k_first');
            $table->double('price_first');
            $table->longText('steps');
            $table->double('price_galon');
            $table->string('transportation_id');
            $table->string('order_type_id');
            $table->string('st');
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
        Schema::dropIfExists('orders');
    }
}
