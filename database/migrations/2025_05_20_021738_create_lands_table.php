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
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string('applicant')->nullable();
            $table->string('applicant_no')->nullable();
            $table->string('lot_no')->nullable();
            $table->string('area')->nullable();
            $table->string('location')->nullable();
            $table->string('dpli_mi_si')->nullable();
            $table->string('lands_type')->nullable();
            $table->string('client_address')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('document')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lands');
    }
};
