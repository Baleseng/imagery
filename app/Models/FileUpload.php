<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'creator_id',
        'admin_id',
        'users_id',

        'status',

        'file_name',
        'file_path',

        'type',
        
        'usage',
        'standard',
        'extended',
        'enhance',
        'editorial',

        'title',
        
        'category',
        'country',

        'keywords',
        'description',
    

    ];


    public function creator(){
        return $this->belongsTo('App\Models\Creator');
    }

    public function admin(){
        return $this->belongsTo('App\Models\Admin');
    }


}
