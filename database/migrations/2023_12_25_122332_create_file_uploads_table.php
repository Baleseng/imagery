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
            $table->string('status');
            $table->string('title');
            $table->string('name')->nullable();
            $table->string('file_path')->nullable();
            $table->string('description');
            $table->string('keywords');
            $table->string('category');
            $table->string('country');
            $table->string('usage');
            $table->string('type');
            

            /** ADD BY ADMIN **/
            $table->integer('admin_id')->default('0');
            $table->string('price')->default('0');

            /** ADD BY USER **/
            $table->integer('users_id')->default('0');

            
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
