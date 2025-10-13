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
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('job_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                        ->references('user_id')
                        ->on('users')
                        ->nullOnDelete();
            $table->string('position', 50)->nullable();
            $table->string('occupation', 50)->nullable();
            $table->enum('occupation_status',['employed', 'unEmployed', 'none'])->default('none');
            $table->enum('course_alignment',['Aligned', 'Not Aligned', 'none'])->default('none');
            $table->string('company_name')->nullable();
            $table->string('description')->nullable();
            $table->decimal('salary', 10,2)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
