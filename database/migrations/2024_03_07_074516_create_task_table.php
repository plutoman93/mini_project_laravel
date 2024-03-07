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
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->string('task_detail');
            $table->date('task_start_date');
            $table->date('task_due_date');
            $table->string('task_type');
            $table->string('status_task');
            $table->foreignId('created_by')->comment('สร้างโดย user_id')->nullable();
            $table->foreignId('updated_by')->comment('แก้ไขโดย user_id')->nullable();
            $table->foreignId('deleted_by')->comment('ลบโดย user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};
