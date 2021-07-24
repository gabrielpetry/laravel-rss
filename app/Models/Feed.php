<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'link',
        'feed_link',
        'icon',
    ];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
    
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
