<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SellerChildCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_child_category', function (Blueprint $table) {
            
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->on('sellers')->references('id');

            $table->unsignedBigInteger('child_category_id');
            $table->foreign('child_category_id')->on('child_categories')->references('id')->onUpdate('cascade')->onDelete('cascade');
            
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
        //
    }
}
