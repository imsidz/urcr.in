<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftDeletes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('agents', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('banners', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('child_categories', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('colors', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('coupons', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('materials', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('photos', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('product_request_by_customers', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('sellers', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('sizes', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('styles', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('sub_categories', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('sub_child_categories', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->softDeletes();
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
