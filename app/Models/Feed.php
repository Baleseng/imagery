<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'users_id',

        'file_id',
        
        'file_like',
        'file_comment',
        'file_shared',

    ];

    public function file(){
        return $this->belongsTo('App\Models\FileUpload');
    }

    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    
}
