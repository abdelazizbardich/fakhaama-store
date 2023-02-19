<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_itmes', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->unsigned()->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('order_id');
            $table->index(["order_id"], 'fk_item_order_idx');
            $table->foreign('order_id', 'fk_item_order_idx')->references('id')->on('orders')->onDelete('no action')->onUpdate('no action');

            $table->unsignedBigInteger('product_id');
            $table->index(["product_id"], 'fk_order_item_product_idx');
            $table->foreign('product_id', 'fk_order_item_product_idx')->references('id')->on('products')->onDelete('no action')->onUpdate('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_itmes');
    }
};
