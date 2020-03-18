<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('seller_id')->unsigned()->nullable()->
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->foreign('category_id')
              ->references('id')->on('categories')
              ->onDelete('cascade');
            $table->foreign('seller_id')
                ->references('id')->on('sellers')
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
        Schema::dropIfExists('banners');
    }
}
