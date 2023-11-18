<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'user_id',
        'account_name',
        'account_type',
        'account_number',
        'routing_number',
        'balance',
        'is_active'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
