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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('login')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->unsignedSmallInteger('gender')->nullable();
            $table->date('born_at')->nullable()->index();
            $table->string('avatar_path')->nullable();
            $table->boolean('is_active')->default(true);
            
            $table->foreignId('user_id')->index()->constrained('users');
            $table->foreignId('role_id')->index()->constrained('roles');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
