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
        Schema::create('k_p_i_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->boolean('closed_deals')->default(false);
            $table->decimal('total_revenue', 10, 2)->default(0);
            $table->decimal('response_time_average', 10, 2)->default(0);
            $table->decimal('lead_conversion_rate', 5, 2)->default(0);
            $table->decimal('commission_generated', 10, 2)->default(0);
            $table->boolean('target_met')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_p_i_s');
    }
};
