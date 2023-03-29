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
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeer_id')->constrained()->onDelete('restrict');
            $table->foreignId('timesheet_version_id')->constrained()->onDelete('restrict');
            $table->integer('month')->nullable('false');
            $table->integer('year')->nullable('false');
            $table->decimal('hours_worked')->nullable('false');
            $table->decimal('productivity_factor')->nullable('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timesheets');
    }
};
