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
            $table->string('slug')->unique();
            $table->string('model');
            $table->text('description');
            $table->string('image');
            $table->float('price');
            $table->integer('likes')->default(0);
            $table->foreignIdFor(\App\Models\Subcategory::class, 'subcategory_id');
            $table->foreignIdFor(\App\Models\Category::class, 'category_id');
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
