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
        Schema::create('todos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->boolean('is_completed')->default(false);
            $table->string('priority', 10)->default('medium');
            $table->dateTime('due_date')->nullable();
            $table->unsignedBigInteger('created_by'); // FK users.id
            $table->timestamps();

            // Foreign key
            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            // Indexes
            $table->index('created_by', 'idx_todos_created_by');
            $table->index('is_completed', 'idx_todos_is_completed');
            $table->index('due_date', 'idx_todos_due_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
