<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_manages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice_number');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('shipping_id')->unsigned()->nullable();
            $table->bigInteger('payment_id')->unsigned()->nullable();
            $table->string('total');
            $table->string('subtotal');
            $table->string('tax');
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('shipping_id')->references('id')->on('deliveries')->onDelete('cascade');
            $table->foreign('payment_id')
            ->references('id')->on('paids')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_manages');
    }
}
