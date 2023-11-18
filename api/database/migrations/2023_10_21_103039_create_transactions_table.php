<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('bank_account_id');
            $table->string('description');
            $table->uuid('transaction_type');
            $table->decimal('amount', 10, 2);
            $table->date('transaction_date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bank_account_id')->references('id')->on('bank_accounts');
            $table->foreign('transaction_type')->references('id')->on('transaction_categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
