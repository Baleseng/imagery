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

            $table->string('file_name');
            $table->string('file_path');

            $table->string('type');
            $table->string('usage')->nullable();;
            $table->string('orientation')->nullable();
            $table->string('column')->nullable();
        
            $table->text('standard')->nullable();
            $table->text('extended')->nullable();
            $table->text('enhance')->nullable();
            $table->text('editorial')->nullable();

            $table->string('title');

            $table->string('category');
            $table->string('country');
            
            $table->string('keywords')->nullable();
            $table->text('description');

            $table->string('notes')->nullable();
           
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
