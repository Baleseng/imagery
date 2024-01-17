<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        
    'admin_id',
    'users_id',
    'creator_id',

    'type',
    'name',
    'file_path',
    'usage',
    'description',
    'keywords',
    'category',
    'status',
    'location',
    'price',

    ];
}
