<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordered_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->float('price')->nullable();
            $table->float('mrp')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->foreign('seller_id')->on('sellers')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('status')->default('Pending');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->on('orders')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ordered_products');
    }
}
