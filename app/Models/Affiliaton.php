<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliaton extends Model
{
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
}
