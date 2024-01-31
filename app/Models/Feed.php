<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'users_id',
        'users_name',
        'users_img',

        'file_id',
        'file_name',
        'file_title',
        'file_description',

        'file_like',
        'file_comment',
        'file_shared',

    ]
}
