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
        Schema::create('seo_data', function (Blueprint $table) {
            $table->id();
            $table->string('entity_type'); // This will store the type of entity (e.g., 'pages', 'services_products', 'blogs_news')
            $table->unsignedBigInteger('entity_id'); // This will store the ID of the entity
            $table->string('title')->nullable(); // Title tag
            $table->text('meta_description')->nullable(); // Meta description
            $table->text('keywords')->nullable(); // Keywords
            $table->string('canonical_url')->nullable(); // Canonical URL
            $table->json('structured_data')->nullable(); // Structured data in JSON format
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_data');
    }
};
