<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoldbooksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soldbooks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profit')->nullable();
            $table->integer('seller_id')->nullable();
            $table->integer('buyer_id')->nullable();
            $table->integer('bookings_id')->nullable();
            $table->integer('form_No')->nullable();
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
        Schema::drop('soldbooks');
    }
}
