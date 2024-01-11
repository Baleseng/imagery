<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        
    'admin_id',
    'users_id',
    'creator_id',

    'type',
    'path',
    'usage',
    'description',
    'keywords',
    'category',
    'status',
    'location',

    ];
}
