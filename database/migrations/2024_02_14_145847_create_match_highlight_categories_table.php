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
        Schema::create('match_highlight_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('parent_id')->nullable()->constrained('match_highlight_categories');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });

        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('code');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });

        Schema::create('match_highlights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('match_highlight_categories');
            $table->foreignId('sub_category_id')->constrained('match_highlight_categories')->nullable();
            $table->foreignId('language_id')->constrained('languages')->nullable();
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('video_url')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_highlight_categories');
    }
};
