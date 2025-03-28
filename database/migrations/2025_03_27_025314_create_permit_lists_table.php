<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('permit_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permit_id');
            $table->string('app_no')->unique();
            $table->string('name');
            $table->string('subject');
            $table->integer('year');
            $table->text('document');
            $table->text('remarks')->nullable();
            $table->timestamps();

            $table->foreign('permit_id')->references('id')->on('permits')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permit_lists');
    }
};
