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
            $table->foreignId('category_id')->references('id')->on('categorys');
            $table->string('title');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->date('date')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['Publish', 'Draft']);
            $table->foreignId('user_id')->references('id')->on('users')->after('slug');
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
