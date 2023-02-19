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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->text('photo')->nullable();
            $table->json('gallery')->nullable();
            $table->text('slider_photo')->nullable();
            $table->decimal('old_price', 10, 2)->nullable();
            $table->decimal('actual_price', 10, 2)->nullable();
            $table->float('weight')->nullable();
            $table->json('dimentions')->nullable();
            $table->json('materials')->nullable();
            $table->longText('other_infos')->nullable();
            $table->integer('in_stock')->unsigned()->nullable();
            $table->boolean('home_slider')->default(false);
            $table->timestamps();

            $table->unsignedBigInteger('category_id');
            $table->index(["category_id"], 'fk_product_category_idx');
            $table->foreign('category_id', 'fk_product_category_idx')
                ->references('id')->on('categories')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
