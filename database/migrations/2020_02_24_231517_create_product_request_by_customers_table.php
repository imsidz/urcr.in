<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductRequestByCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_request_by_customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::create('product_request_material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_request_by_customers_id')->nullable();
            $table->foreign('product_request_by_customers_id')->references('id')->on('product_request_by_customers')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('material_id')->nullable();
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::create('product_request_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_request_by_customers_id')->nullable();
            $table->foreign('product_request_by_customers_id')->references('id')->on('product_request_by_customers')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('sub_child_category_id')->nullable();
            $table->foreign('sub_child_category_id')->references('id')->on('sub_child_categories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('product_request_by_customers');
    }
}
