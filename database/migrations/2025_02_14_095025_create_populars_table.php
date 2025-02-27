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
            $table->string('file_view')->nullable();
            $table->string('file_shared')->nullable();
            $table->string('file_saved')->nullable();
            $table->string('file_mockup')->nullable();

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
