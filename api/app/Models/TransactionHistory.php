<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    protected $fillable = ['transaction_id', 'status', 'description', 'created_at'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
