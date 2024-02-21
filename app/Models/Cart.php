<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'admin_id',
        'creator_id',
        
        'file_id',
        'file_title',
        'file_name',
        'file_quantity',
        'file_price',
    ];
    
}
