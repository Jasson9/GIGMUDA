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
        Schema::create('msusers_bio', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->string('address', 100)->nullable();
            $table->char('country', 64)->nullable();
            $table->string('portofolio_link')->nullable();
            $table->char('national_id', 32)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('msusers_bio');
    }
};
