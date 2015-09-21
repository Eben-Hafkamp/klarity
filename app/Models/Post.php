<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments() {
      return $this->belongsTo('App\Models\Post');
    } 
}
