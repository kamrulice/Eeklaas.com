<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status')->default(0);
            $table->integer('product_id')->unsigned()->nullable();
            $table->integer('seller_id')->unsigned()->nullable();
            $table->string('productName');
            $table->string('quantity');
            $table->string('price');
            $table->integer('shipping_charge')->nullable();
            $table->integer('discount')->nullable();
            $table->string('total_price');
            $table->string('address');
            $table->string('phone');
            $table->string('supplier');
            $table->string('payment_type')->nullable();
            $table->foreign('seller_id')
                ->references('id')->on('sellers')
                ->onDelete('cascade');
            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');
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
        Schema::dropIfExists('shippings');
    }
}
