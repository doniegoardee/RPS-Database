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
        Schema::create('chainsaws', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chainsaw_parent_id')->constrained('chainsaw_parents')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('brand')->nullable();
            $table->string('serial_num')->nullable();
            $table->string('date_registered')->nullable();
            $table->string('date_expiry')->nullable();
            $table->string('control_no')->nullable();
            $table->string('date_acquired')->nullable();
            $table->string('horse_power')->nullable();
            $table->text('length_guidebar')->nullable();
            $table->string('sticker')->nullable();
            $table->text('purpose')->nullable();
            $table->string('remarks')->nullable();
            $table->string('client_address')->nullable();
            $table->string('permit_type')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chainsaws');
    }
};
