<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_id');
            $table->text('description_en')->nullable();
            $table->text('description_id')->nullable();
            $table->string('price');
            $table->string('image')->nullable();
            $table->boolean('is_bestseller')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
