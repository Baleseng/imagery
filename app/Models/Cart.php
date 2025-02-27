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
    'file_title',
    'file_description',
    'quantity',
    'type',
    'price',

}
