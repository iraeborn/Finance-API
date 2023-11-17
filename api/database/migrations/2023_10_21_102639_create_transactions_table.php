<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('bank_account_id');
            $table->string('description');
            $table->enum('transaction_type', ['deposit', 'withdrawal', 'transfer']);
            $table->decimal('amount', 10, 2);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bank_account_id')->references('id')->on('bank_accounts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
