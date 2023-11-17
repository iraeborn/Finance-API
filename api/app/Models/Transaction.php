<?php

namespace App;

use App\Models\TransactionCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id', 'bank_account_id', 'amount', 'description', 'transaction_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bankAccount()
    {
        return $this->belongsTo(BankAccount::class);
    }

    public function category()
    {
        return $this->belongsTo(TransactionCategory::class);
    }
}
