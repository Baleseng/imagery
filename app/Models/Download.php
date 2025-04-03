<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'users_id',
        'creator_id',
        'file_id',
        
        'file',
        'file_title',
        'file_description',
        'quantity',
        'price',
  
    ];
}
