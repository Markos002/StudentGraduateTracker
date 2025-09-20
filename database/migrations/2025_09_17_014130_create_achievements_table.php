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
        Schema::create('achievements', function (Blueprint $table) {
            $table->bigIncrements('achievement_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('personal_summary')->nullable();
            $table->string('cert_name')->nullable();
            $table->string('year')->nullable();
            $table->string('term')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('user_id')
                    ->on('users')
                    ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
