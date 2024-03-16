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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->foreignId('product_id')->nullable()->constrained('products', 'id')->nullOnDelete();
            $table->foreignId('recipe_id')->nullable()->constrained('recipes', 'id')->nullOnDelete();
            $table->foreignId('facility_id')->nullable()->constrained('facilities', 'id')->nullOnDelete();
            $table->string("image");
            $table->enum('type', ['main_image','product_image','facility_image','recipes_image']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};