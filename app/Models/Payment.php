<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'users_id',
        'creator_id',
        'file_id',

        'file',
        'file_title',
        'file_description',
        'file_quantity',
        'file_type',
        'file_price',

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
