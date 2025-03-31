<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'creator_id',  
        'file_id', 
        'file_price', 
        'file_quantity'
    ];

    public function file()
    {
        return $this->belongsTo(FileUpload::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
