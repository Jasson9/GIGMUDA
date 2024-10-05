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
        Schema::table('msusers_bio', function (Blueprint $table) {
            $table->foreign(['user_id'], 'fk_users_bio_users')->references(['id'])->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('msusers_bio', function (Blueprint $table) {
            $table->dropForeign('fk_users_bio_users');
        });
    }
};
