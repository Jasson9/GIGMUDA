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
        Schema::create('msuser_pay_methods', function (Blueprint $table) {
            $table->string('payment_num', 32);
            $table->unsignedBigInteger('user_id');
            $table->char('payment_source', 4)->index('fk_msuser_pay_methods_mspayment_source');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->primary(['user_id', 'payment_source']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('msuser_pay_methods');
    }
};
