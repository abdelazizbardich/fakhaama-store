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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('code', 100);
            $table->index(["user_id"], 'fk_order_user_idx');
            $table->foreign('user_id', 'fk_order_user_idx')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->unsignedBigInteger('address_id');
            $table->index(["address_id"], 'fk_order_address_idx');
            $table->foreign('address_id', 'fk_order_address_idx')->references('id')->on('addresses')->onDelete('no action')->onUpdate('no action');
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
        Schema::dropIfExists('orders');
    }
};
