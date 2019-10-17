<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('sub_category_id');
            $table->foreign('sub_category_id')->on('sub_categories')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('image');
            $table->timestamps();
        });

        Schema::create('child_category_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('child_category_id');
            $table->foreign('child_category_id')->on('child_categories')->references('id')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->on('products')->references('id')->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::dropIfExists('child_categories');
    }
}
