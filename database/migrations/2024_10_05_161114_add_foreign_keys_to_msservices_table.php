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
        Schema::table('msservices', function (Blueprint $table) {
            $table->foreign(['freelancer_id'], 'fk_msservices_msfreelancer')->references(['freelancer_id'])->on('msfreelancer')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('msservices', function (Blueprint $table) {
            $table->dropForeign('fk_msservices_msfreelancer');
        });
    }
};
