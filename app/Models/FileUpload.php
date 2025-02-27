<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class FileUpload extends Model implements Viewable
{
    use InteractsWithViews;

    protected $fillable = [    
        'creator_id',
        'admin_id',
        'users_id',

        'file_status',

        'file_name',
        'file_path',

        'file_type',
        'file_orientation',
        
        'file_usage',
        'file_standard',
        'file_extended',
        'file_enhance',
        'file_editorial',

        'file_title',
        
        'file_category',
        'file_country',

        'file_keywords',
        'file_description',
        'file_notes',
    ];

    public function feed(){
        return $this->hasMany('App\Models\Feed');
    }


    public function creator(){
        return $this->belongsTo('App\Models\Creator');
    }

    public function admin(){
        return $this->belongsTo('App\Models\Admin');
    }

    

    public function popular(){
        return $this->belongsTo('App\Models\Popular');
    }


}
