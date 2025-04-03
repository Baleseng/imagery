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
        Schema::create('payments', function (Blueprint $table) {
            
            $table->id();

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('creator_id')->constrained('creators');
            $table->foreignId('file_id')->constrained('file_uploads');
            
            $table->string('file_quantity')->nullable();
            $table->string('file_type')->nullable();
            $table->string('file_price')->nullable();

            $table->string('cardholdername')->nullable();
            $table->integer('cardholdernumber')->nullable();
            $table->string('cardholderexpire')->nullable();
            $table->integer('cardholdercvv')->nullable();
            $table->string('cardholderaddress')->nullable();
            $table->string('cardholderaddressopt')->nullable();
            $table->string('cardholdercountry')->nullable();
            $table->string('cardholderprovince')->nullable();
            $table->string('cardholderzip')->nullable(); 

            $table->timestamps();

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};