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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subtask_id')->nullable('false');
            $table->bigInteger('b_task_id')->nullable('false');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->decimal('time_estimated');
            $table->decimal('time_spent');
            $table->decimal('productivity_factor');
            $table->decimal('effective_time');
            $table->string('status');
            $table->integer('user_b_id');
            $table->date('planned_start')->format();
            $table->date('planned_finish')->nullable()->format();
            $table->date('updated');
            $table->string('username');
            $table->decimal('weight');
            $table->string('operation_name');
            $table->boolean('currentTimerstate');
            $table->string('pj_name');
            $table->string('area');
            $table->string('ws_name');
            $table->foreignId('employeer_id')->default(1)->constrained()->onDelete('restrict');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
