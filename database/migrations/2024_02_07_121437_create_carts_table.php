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
        Schema::create('carts', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // If you have user authentication
            $table->unsignedBigInteger('creator_id');
           
            $table->unsignedBigInteger('file_id');
            $table->decimal('file_price', 8, 2);
            $table->integer('file_quantity')->default(1);
            
            $table->foreign('file_id')->references('id')->on('file_uploads')->onDelete('cascade');
            $table->foreign('creator_id')->references('id')->on('creators')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps();
            
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
