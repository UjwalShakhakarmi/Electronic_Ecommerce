<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('Brand_id');
            $table->string('product_name');
            $table->string('Category');
            $table->longText('Description');
            $table->string('Type')->nullable();
            $table->string('Product_Img',255);

            $table->longText('HighLight_Heading')->nullable();
            $table->longText('HighLight_Desc')->nullable();
            $table->longText('Specification')->nullable();

            $table->mediumText('Meta_Title')->nullable();
            $table->mediumText('Meta_Desc')->nullable();
            $table->mediumText('Meta_Key')->nullable();

            $table->string('Actual_Price',50)->nullable();
            $table->string('Offer_Price',50)->nullable();
            $table->integer('Quantity')->nullable();
            $table->integer('Priority')->nullable();

            
            $table->tinyInteger('new_arrival')->default('0');
            $table->tinyInteger('Featured_products')->default('0');
            $table->tinyInteger('popular_products')->default('0');
            $table->tinyInteger('offers_products')->default('0');
            $table->tinyInteger('status')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
