<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;
    protected $fillable = [

        'users_id',
        'users_name',
        'users_img',

        'file_id',
        'file_name',
        'file_title',
        
    ]
}
