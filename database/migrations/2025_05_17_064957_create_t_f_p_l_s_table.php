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
        Schema::create('t_f_p_l_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tfpl_parent_id')->constrained('t_f_p_l_parents')->cascadeOnDelete();
            $table->string('name_permitee')->nullable();
            $table->string('place_of_loading')->nullable();
            $table->string('destination')->nullable();
            $table->string('species')->nullable();
            $table->string('permit_no')->nullable();
            $table->string('volume_to_transport')->nullable();
            $table->string('no_finish_product')->nullable();
            $table->string('no_finish_lumber')->nullable();
            $table->string('date_transport')->nullable();
            $table->string('cert_and_oath')->nullable();
            $table->string('inspection')->nullable();
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
        Schema::dropIfExists('t_f_p_l_s');
    }
};
