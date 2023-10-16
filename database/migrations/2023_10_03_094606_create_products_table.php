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
            $table->bigInteger('categoryId');
            $table->string('name');
            $table->string('slug');
            $table->mediumText('smallDescription');
            $table->longText('description');
            $table->decimal('originalPrice');
            $table->decimal('salePrice');
            $table->json('images')->nullable();
            $table->string('qty');
            $table->tinyInteger('bestSeller');
            $table->tinyInteger('feature');
            $table->tinyInteger('saleProduct');
            $table->mediumText('metaTitle');
            $table->mediumText('metaDescription');
            $table->mediumText('metaKeywords');
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
