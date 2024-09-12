<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'file_id',
        'creator_id',
        'file',
        'title',
        'description',
        'quantity',
        'type',
        'price',

        'cardholdername',
        'cardholdernumber',
        'cardholderexpire',
        'cardholdercvv',
        'cardholderaddress',
        'cardholderaddressopt',
        'cardholdercountry',
        'cardholderprovince',
        'cardholderzip',
    ];
}
