<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Model;

class Popular extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'users_id',
        'creator_id',
        'file_id',
        
        'file_popular',
    ];

    public function file(){
        return $this->belongsTo('App\Models\FileUpload');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function admin(){
        return $this->belongsTo('App\Models\Admin');
    }


}
