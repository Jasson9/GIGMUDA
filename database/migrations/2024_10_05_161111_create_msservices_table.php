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
        Schema::create('msservices', function (Blueprint $table) {
            $table->bigIncrements('service_id');
            $table->unsignedInteger('freelancer_id')->index('fk_msservices_msfreelancer');
            $table->string('service_name', 100);
            $table->string('service_descr')->nullable();
            $table->unsignedBigInteger('service_price');
            $table->integer('service_type')->nullable();
            $table->string('service_img_url')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('msservices');
    }
};
