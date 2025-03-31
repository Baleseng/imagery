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

            $table->integer('page_views')->default(0); // Track page views
            $table->integer('button_clicks')->default(0); // Track button clicks
            $table->integer('href_clicks')->default(0); // Track href clicks
            
            $table->string('element_id')->nullable(); // e.g., 'buy-now-btn'
            $table->string('element_type')->nullable(); // 'button' or 'anchor'

            $table->string('file_status');

            $table->string('file_name');
            $table->string('file_path');

            $table->string('file_type');
            $table->string('file_usage')->nullable();;
            $table->string('file_orientation')->nullable();
            $table->string('file_column')->nullable();
        
            $table->text('file_standard')->nullable();
            $table->text('file_extended')->nullable();
            $table->text('file_enhance')->nullable();
            $table->text('file_editorial')->nullable();

            $table->string('file_title');

            $table->string('file_category');
            $table->string('file_country');
            
            $table->string('file_keywords')->nullable();
            $table->text('file_description');

            $table->string('file_notes')->nullable();
           
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
