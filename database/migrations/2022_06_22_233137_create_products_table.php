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
            $table->foreignId('admin_id');
            $table->foreignId('category_id');
            $table->string('name');
            $table->integer('price');
            $table->string('photo_1')->nullable()->default('productphotos/ina.jpg');
            $table->string('photo_2')->nullable()->default('productphotos/ina.jpg');
            $table->string('photo_3')->nullable()->default('productphotos/ina.jpg');
            $table->string('brand')->nullable()->default("No brand is described");
            $table->string('model')->nullable()->default("No model is descriped");
            $table->integer('stock')->default(1);
            $table->string('service')->nullable()->default("no service available for this product");
            $table->text("regional_delivery_info")->default("no info");
            $table->text("non_regional_delivery_info")->default("no info");
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
        Schema::dropIfExists('products');
    }
};
