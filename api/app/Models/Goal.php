<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'target_amount',
        'current_amount',
        'deadline'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
