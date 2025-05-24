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
        Schema::create('tree_cuttings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cutting_parent_id')->constrained('tree_cutting_parents')->cascadeOnDelete();
            $table->string('name_permitee')->nullable();
            $table->string('location')->nullable();
            $table->string('no_trees')->nullable();
            $table->string('species')->nullable();
            $table->string('approved_volume')->nullable();
            $table->string('date_issuance')->nullable();
            $table->string('expiration_date')->nullable();
            $table->string('seed_requirements')->nullable();
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
        Schema::dropIfExists('tree_cuttings');
    }
};
