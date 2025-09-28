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
        Schema::create('list_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('student_id');
            $table->string('last_name', 50)->nullable();
            $table->string('first_name', 50)->nullable();
            $table->unsignedInteger('tor_number');
            $table->string('course_graduate', 20);
            $table->string('batch_graduate', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_data');
    }
};
