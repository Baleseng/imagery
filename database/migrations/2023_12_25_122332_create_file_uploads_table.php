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
        Schema::create('file_uploads', function (Blueprint $table) {
            
            $table->id();

            $table->integer('users_id')->default('0');
            $table->integer('admin_id')->default('0');
            $table->integer('creator_id')->default('0');

            $table->string('type');
            $table->string('path');
            $table->string('usage');
            $table->string('description');
            $table->string('keywords');
            $table->string('category');
            $table->string('status');
            $table->string('location');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_uploads');
    }
};
