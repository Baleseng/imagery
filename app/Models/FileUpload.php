<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FileUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        
    'creator_id',
    'admin_id',
    'users_id',

    'title',
    'type',
    'file_name',
    'file_path',
    'usage',
    'description',
    'keywords',
    'category',
    'status',
    'country',
    'price',

    ];


    public function creator(){
        return $this->belongsTo('App\Models\Creator');
    }

    public function admin(){
        return $this->belongsTo('App\Models\Admin');
    }


}
