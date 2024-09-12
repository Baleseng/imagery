<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    'user_id',
    'file_id',
    'creator_id',
    'file',
    'title',
    'description',
    'quantity',
    'type',
    'price',

}
