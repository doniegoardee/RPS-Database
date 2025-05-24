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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_parent_id')->constrained('supplier_parents')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('business_name')->nullable();
            $table->string('location')->nullable();
            $table->string('volume')->nullable();
            $table->string('date_issuance')->nullable();
            $table->string('date_expiration')->nullable();
            $table->string('client_address')->nullable();
            $table->string('permit_type')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
};
