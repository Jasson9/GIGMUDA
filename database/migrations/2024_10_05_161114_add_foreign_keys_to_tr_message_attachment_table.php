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
        Schema::table('tr_message_attachment', function (Blueprint $table) {
            $table->foreign(['message_id'], 'fk_tr_message_attachment_trchats')->references(['message_id'])->on('trchats')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tr_message_attachment', function (Blueprint $table) {
            $table->dropForeign('fk_tr_message_attachment_trchats');
        });
    }
};
