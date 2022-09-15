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
            $table->date('check_in');
            $table->date('check_out')->nullable();
            $table->integer('adults');
            $table->integer('children');
            $table->integer('rooms_id');
            $table->integer('user_id');
            $table->decimal('total_price');
            $table->boolean('active')->default('1');
            $table->enum('payment', ['cash','online']);

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
