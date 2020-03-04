<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoryMegaMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_category_mega_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('category_mega_menu_id');
            $table->foreign('category_mega_menu_id')->on('category_mega_menus')->references('id')->onUpdate('cascade')->onDelete('cascade');
            
            $table->unsignedBigInteger('sub_category_id');
            $table->foreign('sub_category_id')->on('sub_categories')->references('id')->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::dropIfExists('sub_category_mega_menus');
    }
}
