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
        Schema::create('tenurial_instruments', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_num')->nullable();
            $table->string('subject')->nullable();
            $table->date('date')->nullable();
            $table->string('file')->nullable();
            $table->string('type')->nullable();
            $table->string('tenur_type')->nullable();
            $table->foreignId('tenur_type_id')->nullable()->constrained('type_t_i_s')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenurial_instruments');
    }
};
