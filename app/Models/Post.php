<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'content',
        'author',
        'website_id',
    ];

    public function user(){
        return $this->belongsTo(User::class,'author');
    }

    public function website()
    {
        return $this->belongsTo(Website::class, 'website_id');
    }
}
