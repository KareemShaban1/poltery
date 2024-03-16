<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();

            $table->string('title_en');
            $table->string('title_ar')->nullable();
            $table->string('type_en');
            $table->string('type_ar')->nullable();
            $table->string('image');
            $table->text('description_en');
            $table->text('description_ar')->nullable();
            $table->text('ingredients_en');
            $table->text('ingredients_ar')->nullable();
            $table->longText('preparation_en');
            $table->longText('preparation_ar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
