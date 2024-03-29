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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('department');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('task_name');
            $table->string('task_detail');
            $table->string('task_start_date');
            $table->string('task_due_date');
            $table->string('task_type');
            $table->string('task_file');
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path',2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
