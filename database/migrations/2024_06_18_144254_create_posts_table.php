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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('content');
            // $table->string('author')->nullable();  // TO DROP
            $table->unsignedSmallInteger('status')->default(1);
            $table->text('description')->nullable();
            $table->string('image_path')->nullable();
            $table->string('tag')->nullable();

            $table->foreignId('profile_id')->index()->constrained('profiles');
            $table->foreignId('category_id')->index()->constrained('categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
