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
        Schema::create('trpayment_dtl', function (Blueprint $table) {
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('charge_id')->index('fk_trpayment_dtl_trcharge');
            $table->unsignedBigInteger('paid_amount');
            $table->timestamp('created_at')->useCurrent();

            $table->primary(['payment_id', 'charge_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trpayment_dtl');
    }
};
