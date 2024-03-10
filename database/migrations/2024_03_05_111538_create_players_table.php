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
            $table->longText('team_id')->nullable();
            $table->string('name');
            $table->date('dob');
            $table->string('country');
            $table->string('playing_role');
            $table->string('batting_style');
            $table->string('bowling_style');
            $table->string('batting');
            $table->string('bowling');
            $table->string('image');
            $table->longText('profile');
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
