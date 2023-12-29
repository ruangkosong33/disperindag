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
        Schema::create('guidescruples', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignId('dip_id')->references('id')->on('dips');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('job');
            $table->longText('applicantdata');
            $table->longText('objective');
            $table->enum('obtaion', [1,2,3,4]);
            $table->enum('copy', [1,2]);
            $table->enum('method', [1,2,3]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guidescruples');
    }
};
