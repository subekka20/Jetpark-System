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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->String('booking_number')->unique();
            $table->bigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers'); 
            $table->string('first_name');
            $table->string('last_name');
            $table->string('customer_email');
            $table->string('customer_contact_no');
            $table->string('address');
            $table->string('street');
            $table->string('city');
            $table->string('postal_code');
            $table->date('pick_date');
            $table->time('pick_time');
            $table->date('depature_date');
            $table->time('depature_time');
            $table->string('return_flight_number')->nullable();
            $table->string('car_reg_number')->nullable();
            $table->string('car_make')->nullable();
            $table->string('color')->nullable();
            $table->string('car_model')->nullable();
            $table->bigInteger('car_wash')->default(0);
            $table->string('payment_method')->nullable();
            $table->string('promo_code')->nullable();
            $table->bigInteger('status')->default(0);
            $table->double("paid_amount");
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
        Schema::dropIfExists('bookings');
    }
};
