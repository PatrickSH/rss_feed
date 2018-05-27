<?php

namespace App;

use App\Feed;

class User
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email'
    ];

    public function feeds(){
        return $this->hasMany(Feed::class);
    }
}
