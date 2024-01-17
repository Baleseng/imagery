<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();

            $table->integer('users_id')->default('0');
            $table->integer('admin_id')->default('0');
            $table->integer('creator_id');

            $table->string('name')->nullable();
            $table->string('file_path')->nullable();

            $table->string('type')->default('0');
            $table->string('usage')->default('0');
            $table->string('description')->default('0');
            $table->string('keywords')->default('0');
            $table->string('category')->default('0');
            $table->string('status')->default('0');
            $table->string('location')->default('0');
            $table->string('price')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
