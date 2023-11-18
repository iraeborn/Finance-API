<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'transaction_id',
        'status',
        'description',
        'created_at'
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
