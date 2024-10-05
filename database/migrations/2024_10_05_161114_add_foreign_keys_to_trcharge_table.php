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
        Schema::table('trcharge', function (Blueprint $table) {
            $table->foreign(['prod_trx_id'], 'fk_trcharge_trproducts')->references(['prod_trx_id'])->on('trproducts')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['project_id'], 'fk_trcharge_trprojects')->references(['project_id'])->on('trprojects')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trcharge', function (Blueprint $table) {
            $table->dropForeign('fk_trcharge_trproducts');
            $table->dropForeign('fk_trcharge_trprojects');
        });
    }
};
