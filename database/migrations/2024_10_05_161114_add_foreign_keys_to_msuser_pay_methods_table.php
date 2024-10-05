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
        Schema::table('msuser_pay_methods', function (Blueprint $table) {
            $table->foreign(['payment_source'], 'fk_msuser_pay_methods_mspayment_source')->references(['payment_source'])->on('mspayment_source')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['user_id'], 'fk_msuser_pay_methods_users')->references(['id'])->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('msuser_pay_methods', function (Blueprint $table) {
            $table->dropForeign('fk_msuser_pay_methods_mspayment_source');
            $table->dropForeign('fk_msuser_pay_methods_users');
        });
    }
};
