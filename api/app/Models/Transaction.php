<?php

namespace App\Models;

use App\Models\TransactionCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'user_id',
        'bank_account_id',
        'amount',
        'description',
        'transaction_date',
        'transaction_type'
    ];

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
