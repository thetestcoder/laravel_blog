<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Article extends Model
{
    function getCategory(){
        return $this->hasOne('App\Models\Category','id','category_id');
    }


}
