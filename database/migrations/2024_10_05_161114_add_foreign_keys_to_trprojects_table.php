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
        Schema::table('trprojects', function (Blueprint $table) {
            $table->foreign(['service_id'], 'fk_trprojects_msservices')->references(['service_id'])->on('msservices')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'fk_trprojects_users')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trprojects', function (Blueprint $table) {
            $table->dropForeign('fk_trprojects_msservices');
            $table->dropForeign('fk_trprojects_users');
        });
    }
};
