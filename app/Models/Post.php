<?php

namespace App\Models;

use App\Services\SlugService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function path()
    {
        return route('posts.show',$this);
    }
}
