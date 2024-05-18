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
        Schema::create('freeincomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid');
            $table->decimal('total_points', 18, 8)->default(0);
            $table->decimal('total_income', 18, 8)->default(0);
            $table->decimal('total_withdrawal', 18, 8)->default(0);
            $table->boolean('rq_status')->default(0);
            $table->unsignedBigInteger('sl_id')->nullable();
            $table->timestamps();

            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('sl_id')->references('id')->on('sharelinks')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freeincomes');
    }
};
