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
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->string('trade_category');
            $table->decimal('investment', 12, 2);
            $table->integer('duration');
            $table->decimal('total_profit', 12, 2);
            $table->decimal('monthly_profit', 12, 2);
            $table->decimal('weekly_profit', 12, 2);
            $table->decimal('deposit_bonus', 12, 2);
            $table->decimal('refer_bonus', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};
