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
        Schema::create('trprojects', function (Blueprint $table) {
            $table->bigIncrements('project_id');
            $table->unsignedBigInteger('service_id')->index('fk_trprojects_msservices');
            $table->unsignedBigInteger('user_id')->index('fk_trprojects_users');
            $table->string('project_title');
            $table->string('project_desc')->nullable();
            $table->char('project_status', 1)->nullable()->default('P')->comment('Work status of this project, P = pending, O = on progress, D = done');
            $table->char('freelancer_approval', 1)->nullable()->default('N')->comment('Approval from the freelancer which marks the deal, N = not approved, Y = approved');
            $table->dateTime('start_datetime')->comment('actual datetime of the project started');
            $table->dateTime('end_datetime')->comment('actual datetime of the project ended/done');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->dateTime('deadline_datetime')->nullable()->comment('deadline of the project');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trprojects');
    }
};
