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
        Schema::create('populars', function (Blueprint $table) {
            
            $table->id();
            
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('creator_id')->constrained('creators');
            $table->foreignId('file_id')->constrained('file_uploads');
            
            $table->integer('file_popular')->default(0);
            
            $table->timestamps();

        });
    }

    /**
    * Reverse the migrations.
    **/

    public function down(): void
    {
        Schema::dropIfExists('populars');
    }
};
