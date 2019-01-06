<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'postID';
    protected $fillable = [
        'categoryID','title','post','imageName','userID'
    ];

    public function postCategory(){

        return $this->belongsTo('App\Admin\PostCategory', 'categoryID');
    }
}
