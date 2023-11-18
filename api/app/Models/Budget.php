<?php

namespace App\Models;

use App\Models\TransactionCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'user_id',
        'category_id',
        'amount',
        'start_date',
        'end_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(TransactionCategory::class, 'category_id');
    }
}
