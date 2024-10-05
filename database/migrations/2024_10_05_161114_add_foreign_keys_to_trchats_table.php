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
        Schema::table('trchats', function (Blueprint $table) {
            $table->foreign(['from_id'], 'fk_trchats_users')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['to_id'], 'fk_trchats_users_0')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trchats', function (Blueprint $table) {
            $table->dropForeign('fk_trchats_users');
            $table->dropForeign('fk_trchats_users_0');
        });
    }
};
