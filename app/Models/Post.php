<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*use Laravel\Scout\Searchable;*/


class Post extends Model
{
    use HasFactory;
    //use Searchable;

    protected $table = 'posts';
    public $fillable = ['name','age','gender','address','phone'];

    /*public function searchableAs()
    {
        return 'Post.viewPost';
    }*/
}
