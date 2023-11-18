<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Ramsey\Uuid\Nonstandard\Uuid;

class BankController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function allBanks()
    {
        dd('allBanks');
    }

    public function newBank(Request $request)
    {
        $request->validate([
            'user_id'           => 'required|uuid|exists:users,id',
            'account_name'      => 'required|string',
            'account_type'      => 'required|string',
            'account_number'    => 'required|string',
            'routing_number'    => 'required|string',
            'balance'           => 'required|integer',
            'is_active'         => 'required|integer'
        ]);

        $bank = BankAccount::create([
            'id'                => Uuid::uuid4()->toString(),
            'user_id'           => $request->user_id,
            'account_name'      => $request->account_name,
            'account_type'      => $request->account_type,
            'account_number'    => $request->account_number,
            'routing_number'    => $request->routing_number,
            'balance'           => $request->balance,
            'is_active'         => $request->is_active
        ]);

        return response()->json([
            'status' => 'created',
            'message' => 'Bank created successfully',
            'bankAccount' => $bank,
        ]);
    }

    public function transactionsDetails(Transaction $transactionId)
    {
        return [$transactionId];
    }
    
}
