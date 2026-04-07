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
            $table->string('fname');
            $table->string('lname')->nullable();
            $table->integer('experience_years')->nullable();
            $table->string('image')->nullable();
            $table->string('github_url')->nullable();
            $table->string('cv')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['fname','lname','experience_years','image','github_url','cv']);
        });
    }
};
