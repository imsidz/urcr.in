<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubChildCategoryMegaMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_child_category_mega_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('child_category_id');
            $table->foreign('child_category_id')->on('child_category_mega_menus')->references('id')->onUpdate('cascade')->onDelete('cascade');
            
            $table->unsignedBigInteger('sub_child_category_id');
            $table->foreign('sub_child_category_id')->on('sub_child_categories')->references('id')->onUpdate('cascade')->onDelete('cascade');
            
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('sub_child_category_mega_menus');
    }
}
