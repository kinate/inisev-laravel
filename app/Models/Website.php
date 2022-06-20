<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{

    protected $fillable = [
        'name',
    ];
    use HasFactory;

    public function users(){
        // return $this->morphToMany(User::class, "user_websites",null, "user_id");
         return $this->belongsToMany(User::class, "user_websites",null, "user_id");
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
