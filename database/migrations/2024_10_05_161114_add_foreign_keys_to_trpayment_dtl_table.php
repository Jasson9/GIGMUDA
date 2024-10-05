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
        Schema::table('trpayment_dtl', function (Blueprint $table) {
            $table->foreign(['charge_id'], 'fk_trpayment_dtl_trcharge')->references(['charge_id'])->on('trcharge')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['payment_id'], 'fk_trpayment_dtl_trpayment')->references(['payment_id'])->on('trpayment')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trpayment_dtl', function (Blueprint $table) {
            $table->dropForeign('fk_trpayment_dtl_trcharge');
            $table->dropForeign('fk_trpayment_dtl_trpayment');
        });
    }
};
