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
        Schema::create('r_f_p_a_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rfpa_parent_id')->constrained('r_f_p_a_parents')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('date_registered')->nullable();
            $table->string('date_expiry')->nullable();
            $table->string('control_no')->nullable();
            $table->text('purpose')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('r_f_p_a_s');
    }
};
