<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('r_p_s_docs', function (Blueprint $table) {
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

    public function down(): void
    {
        Schema::dropIfExists('r_p_s_docs');
    }
};
