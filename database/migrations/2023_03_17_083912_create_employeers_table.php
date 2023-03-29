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
        Schema::create('employeers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable('false')->comment('Имя');
            $table->string('last_name')->nullable('false')->comment('Фамилия');
            $table->string('identifier')->unique()->nullable('false')->comment('ИИН');
            $table->string('position')->nullable('false');
            $table->string('department')->nullable('false');
            $table->decimal('salary_rate')->nullable('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employeers');
    }
};
