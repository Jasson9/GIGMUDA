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
        Schema::table('trpayment', function (Blueprint $table) {
            $table->foreign(['payment_source'], 'fk_trpayment_mspayment_source')->references(['source_name'])->on('mspayment_source')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trpayment', function (Blueprint $table) {
            $table->dropForeign('fk_trpayment_mspayment_source');
        });
    }
};
