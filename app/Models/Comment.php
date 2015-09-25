<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post() {
      return $this->hasMany('App\Models\Comment');
    }

    protected $fillable('comment', 'user_id', 'post_id');
}
