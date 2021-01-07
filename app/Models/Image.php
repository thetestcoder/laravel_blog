<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function images(){
        return $this->hasMany('App\Models\Article', 'post_id', 'id')->count();
    }

}
