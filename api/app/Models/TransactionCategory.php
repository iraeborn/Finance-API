<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'description'
    ];
}
