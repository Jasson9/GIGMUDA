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
        Schema::create('msproducts', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->unsignedBigInteger('user_id')->index('fk_msproducts_users');
            $table->string('product_name', 100);
            $table->mediumText('product_descr')->nullable();
            $table->string('product_type', 20)->nullable();
            $table->unsignedBigInteger('product_price');
            $table->unsignedInteger('product_stock');
            $table->char('product_status', 1)->default('D')->comment('D = Draft/private view, P = Published/Public can view');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->string('product_img_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('msproducts');
    }
};
