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
        Schema::table('trproducts', function (Blueprint $table) {
            $table->foreign(['product_id'], 'fk_trproducts_msproducts')->references(['product_id'])->on('msproducts')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'fk_trproducts_users')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trproducts', function (Blueprint $table) {
            $table->dropForeign('fk_trproducts_msproducts');
            $table->dropForeign('fk_trproducts_users');
        });
    }
};
