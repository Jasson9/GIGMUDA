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
        Schema::create('trcharge', function (Blueprint $table) {
            $table->comment('subject to changed need more details on how the charge & payments gonna work');
            $table->bigIncrements('charge_id');
            $table->unsignedBigInteger('project_id')->nullable()->index('fk_trcharge_trprojects');
            $table->unsignedBigInteger('charge_amount');
            $table->unsignedBigInteger('paid_amount')->nullable()->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->unsignedBigInteger('prod_trx_id')->nullable()->index('fk_trcharge_trproducts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trcharge');
    }
};
