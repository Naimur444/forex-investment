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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string('planid');
            $table->unsignedBigInteger('uid');
            $table->string('invoice_num');
            $table->decimal('amount', 10, 2);
            $table->string('method');
            $table->string('rc_number')->nullable();
            $table->string('sn_number')->nullable();
            $table->string('trxid')->nullable();
            $table->timestamps();
            
            // Foreign key constraint
            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
