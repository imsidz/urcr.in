<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubChildCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_child_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('child_category_id');
            $table->foreign('child_category_id')->on('child_categories')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('seller_sub_child_category', function (Blueprint $table) {

            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->on('sellers')->references('id');

            $table->unsignedBigInteger('sub_child_category_id');
            $table->foreign('sub_child_category_id')->on('sub_child_categories')->references('id')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('sub_child_categories');
    }
}
