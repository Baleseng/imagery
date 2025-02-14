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

            $table->integer('file_id');

            $table->integer('creator_id');
            $table->integer('admin_id')->nullable();
            $table->integer('user_id')->nullable();

            $table->integer('file_view');

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
