<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = ['user_id', 'name', 'target_amount', 'current_amount', 'deadline'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
