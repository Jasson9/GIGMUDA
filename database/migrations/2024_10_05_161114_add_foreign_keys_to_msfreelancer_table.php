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
        Schema::table('msfreelancer', function (Blueprint $table) {
            $table->foreign(['user_id'], 'fk_msfreelancer_users')->references(['id'])->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('msfreelancer', function (Blueprint $table) {
            $table->dropForeign('fk_msfreelancer_users');
        });
    }
};
