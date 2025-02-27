<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_url',
        'view_count',
        'click_count',
    ];
}
