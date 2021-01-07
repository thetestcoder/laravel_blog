<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Article extends Model
{
    use HasFactory;

    function getCategory(){
        return $this->hasOne('App\Models\Category','id','category_id');
    }

    function getImage(){
        return $this->hasOne('App\Models\Image','id','post_id');
    }

}
