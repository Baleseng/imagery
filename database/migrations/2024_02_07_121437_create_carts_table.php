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

            $table->integer('users_id');

            $table->integer('admin_id');
            $table->integer('creator_id');

            $table->string('file_id');
            $table->string('file_title');
            $table->string('file_name');
            $table->string('file_quantity');
            $table->string('file_price');

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
