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

        'status',

        'file_name',
        'file_path',

        'type',
        'orientation',
        
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
        'notes',
    

    ];


    public function creator(){
        return $this->belongsTo('App\Models\Creator');
    }

    public function admin(){
        return $this->belongsTo('App\Models\Admin');
    }


}
