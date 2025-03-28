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
        Schema::create('xero_sync_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('sync_type'); // e.g., 'invoices', 'payments', etc.
            $table->string('status'); // e.g., 'success', 'error'
            $table->text('message')->nullable(); // Detailed message about the sync
            $table->json('data')->nullable(); // JSON data related to the sync
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xero_sync_logs');
    }
};
