<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('sku');
            $table->bigInteger('seller_id')->unsigned()->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('sub_category_id')->unsigned()->nullable();
            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('slug');
            $table->integer('quantity')->default(1);
            $table->integer('price');
            $table->tinyInteger('status')->default(0);
            $table->integer('offer_price')->nullable();
            $table->date('date_line');
            $table->tinyInteger('published ')->default(0);
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->text('reject')->nullable();
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
        Schema::dropIfExists('products');
    }
}
