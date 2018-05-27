<?php

namespace App;

use App\User;

class Feed
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','url','seen'
    ];

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
