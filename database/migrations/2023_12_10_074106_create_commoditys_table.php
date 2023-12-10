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
        Schema::create('commoditys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('categorys')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commoditys');
    }
};
