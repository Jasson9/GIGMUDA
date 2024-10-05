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
        Schema::create('trproducts', function (Blueprint $table) {
            $table->bigIncrements('prod_trx_id');
            $table->unsignedBigInteger('user_id')->index('fk_trproducts_users');
            $table->unsignedInteger('quantity');
            $table->unsignedBigInteger('product_id')->index('fk_trproducts_msproducts');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->unsignedBigInteger('total_amt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trproducts');
    }
};
