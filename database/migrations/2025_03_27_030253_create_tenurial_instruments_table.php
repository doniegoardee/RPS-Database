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
            $table->string('name_lessee')->nullable();
            $table->string('address')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('expired_date')->nullable();
            $table->string('document')->nullable();
            $table->string('tenur_no')->nullable();
            $table->string('total_area')->nullable();
            $table->string('tenur_type')->nullable();
            $table->foreignId('tenur_type_id')->nullable()->constrained('type_t_i_s')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('status')->nullable();
            $table->string('remark')->nullable();
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
