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
        Schema::create('tr_message_attachment', function (Blueprint $table) {
            $table->bigIncrements('attachment_id');
            $table->string('attachment_url');
            $table->string('attachment_type', 12);
            $table->unsignedBigInteger('message_id')->index('fk_tr_message_attachment_trchats');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tr_message_attachment');
    }
};
