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
        Schema::create('mspayment_source', function (Blueprint $table) {
            $table->char('payment_source', 4)->primary();
            $table->string('source_name', 64)->unique('unq_mspayment_source_source_name');
            $table->char('payment_type', 8)->nullable()->comment('DEBIT, VA, E-Wallet');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->unsignedBigInteger('trx_fee')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mspayment_source');
    }
};
