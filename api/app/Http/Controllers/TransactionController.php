<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionCategory;
use Illuminate\Http\Request;
use Ramsey\Uuid\Nonstandard\Uuid;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function allTransactions()
    {
        $user = auth()->user();
        $transactions = Transaction::where('user_id', $user->id)->get()->all();
        
        return response()->json($transactions);
    }

    public function newTransactions(Request $request)
    {
        $request->validate([
            'user_id'           => 'required|uuid|exists:users,id',
            'bank_account_id'   => 'required|uuid|exists:bank_accounts,id',
            'description'       => 'required|string',
            'transaction_type'  => 'required|uuid|exists:transaction_categories,id',
            'amount'            => 'required|numeric',
            'transaction_date'  => 'required|string',
        ]);

        $transaction = Transaction::create([
            'id'                => Uuid::uuid4()->toString(),
            'user_id'           => $request->user_id,
            'bank_account_id'   => $request->bank_account_id,
            'description'       => $request->description,
            'transaction_type'  => $request->transaction_type,
            'amount'            => $request->amount,
            'transaction_date'  => $request->transaction_date
        ]);

        return response()->json([
            'message' => 'Transaction created successfully',
            'transaction' => $transaction,
        ], 201);
    }

    public function newTypeTransactions(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'description'   => 'required|string',
        ]);

        $transactionType = TransactionCategory::create([
            'id'             => Uuid::uuid4()->toString(),
            'name'           => $request->name,
            'description'    => $request->description
        ]);

        return response()->json([
            'status' => 'created',
            'message' => 'Transaction type created successfully',
            'transactionType' => $transactionType,
        ]);
    }

    public function transactionsDetails(Transaction $transactionId)
    {
        return [$transactionId];
    }
    
}
