<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $fillable = ['user_id', 'account_name', 'account_number', 'balance'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
