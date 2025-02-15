<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Reference to users table
            $table->enum('type', ['credit', 'debit']); // Transaction type
            $table->decimal('amount', 15, 2); // Amount (up to 15 digits, 2 decimals)
            $table->decimal('balance_after', 15, 2); // Balance after transaction
            $table->string('description')->nullable(); // Description (e.g., "Profit from trade")
            $table->string('reference_id')->nullable(); // Reference to order/trade
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
