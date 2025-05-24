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
        Schema::create('foreshores', function (Blueprint $table) {
            $table->id();
            $table->string('applicant')->nullable();
            $table->string('location')->nullable();
            $table->string('fla_no')->nullable();
            $table->string('area')->nullable();
            $table->string('remarks_status')->nullable();
            $table->string('client_address')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->string('lands_type')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('document')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foreshores');
    }
};
