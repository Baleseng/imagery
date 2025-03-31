<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_type',
        'page_url',
        'ip_address',
        'user_agent',
        'session_id',

        'page_views',
        'button_clicks',
        'href_clicks',
        'error_reporting',

    ];

    public function page(){
        return $this->belongsTo('App\Models\FileUpload');
    }
}
