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
        Schema::create('trchats', function (Blueprint $table) {
            $table->bigIncrements('message_id');
            $table->unsignedBigInteger('from_id')->index('fk_trchats_users');
            $table->unsignedBigInteger('to_id')->index('fk_trchats_users_0');
            $table->string('message_text', 300);
            $table->char('message_status', 1)->nullable()->default('S')->comment('V = Viewed, S = Sent, R = Received');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trchats');
    }
};
