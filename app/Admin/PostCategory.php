<?php

namespace App\Admin;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = 'post_category';
    protected $primaryKey = 'categoryID';
    protected $fillable = [
        'name','userID'
    ];

    public function countPost($id){
        $table = Posts::where('categoryID', $id)->count();

        //dd($table);
        return $table;
    }
}
