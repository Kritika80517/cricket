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
 
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->longText('team_ids')->nullable();
            $table->longText('match_ids')->nullable();
            $table->string('name')->nullable();
            $table->date('dob')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('country')->nullable();
            $table->string('playing_role')->nullable();
            $table->string('batting_style')->nullable();
            $table->string('bowling_style')->nullable();
            $table->string('image')->nullable();
            $table->longText('about')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
