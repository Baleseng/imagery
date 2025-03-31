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
        Schema::create('tracking_logs', function (Blueprint $table) {
            
            $table->id();
            
            $table->string('event_type'); // e.g., page_view, button_click, href_click
            $table->string('page_url');
            
            $table->string('ip_address');
            $table->text('user_agent');
            $table->string('session_id');

            $table->integer('page_views')->default(0); // Track page views
            $table->integer('button_clicks')->default(0); // Track button clicks
            $table->integer('href_clicks')->default(0); // Track href clicks

            $table->text('error_reporting')->nullable(); // Store error messages or codes
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tracking_logs', function (Blueprint $table) {
            $table->dropColumn('error_reporting');
        });
    }
};
