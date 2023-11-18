<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'name',
        'description'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
