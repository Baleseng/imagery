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

            /** ADD BY CREATOR **/
            $table->integer('creator_id');
            $table->integer('admin_id')->nullable();
            $table->integer('user_id')->nullable();

            $table->string('status');
            $table->string('title');
            $table->string('file_name');
            $table->string('file_path');
            $table->string('description');
            $table->string('keywords');
            $table->string('category');
            $table->string('country');
            $table->string('usage');
            $table->string('type');
            
            $table->string('views')->nullable();
            $table->string('downloads')->nullable();
            $table->string('feed')->nullable();
            
            $table->string('price')->default('0');
           
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
