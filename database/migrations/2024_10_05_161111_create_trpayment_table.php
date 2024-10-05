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
        Schema::create('trpayment', function (Blueprint $table) {
            $table->comment('subject to changed need more details on how the charge & payments gonna work');
            $table->bigIncrements('payment_id');
            $table->char('payment_source', 4)->index('fk_trpayment_mspayment_source');
            $table->mediumText('reference_number');
            $table->unsignedBigInteger('trx_amount');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trpayment');
    }
};
