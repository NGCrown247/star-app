<?php

use App\Enums\TransactionStatus;
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
        Schema::create('transactions', function (Blueprint $table) {
          $table->uuid('id')->primary();
          $table->unsignedBigInteger('plan_id');
          $table->enum('status',[TransactionStatus::getValues()]);
          $table->unsignedBigInteger('user_id');
          $table->json('transaction_data')->nullable();
          $table->string('refunded_by')->nullable();
          $table->string('refunded_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
