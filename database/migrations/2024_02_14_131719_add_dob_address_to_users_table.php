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
        Schema::table('users', function (Blueprint $table) {
            $table->date('dob')->after('email')->nullable();
            $table->string('contact')->after('dob')->nullable();
            $table->boolean('is_admin')->default(0)->after('contact')->nullable();
            $table->string('address')->after('role')->nullable();
            $table->boolean('status')->default(0)->after('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('dob');
            $table->dropColumn('contact');
            $table->dropColumn('is_admin');
            $table->dropColumn('address');
            $table->dropColumn('status');
        });
    }
};
