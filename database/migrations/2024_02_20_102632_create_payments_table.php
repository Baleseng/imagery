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
        Schema::create('payments', function (Blueprint $table) {
            
            $table->id();

            $table->integer('user_id');
            $table->integer('creator_id')->nullable();
            $table->integer('file_id')->nullable();
            $table->string('file')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('quantity')->nullable();
            $table->string('type');
            $table->string('price');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
