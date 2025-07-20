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
            $table->string('name');
            $table->string('product_id')->unique();
            $table->string('weight');
            $table->string('available');
            $table->string('category');
            $table->string('tags');
            $table->text('descriptions');
            $table->string('image');
            $table->string('thumbnail_1');
            $table->string('thumbnail_2');
            $table->string('thumbnail_3');
            $table->string('thumbnail_4');
            $table->string('thumbnail_5');
            $table->rememberToken();
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
