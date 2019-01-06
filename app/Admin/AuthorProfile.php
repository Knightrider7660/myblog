<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class AuthorProfile extends Model
{
    protected $table = 'post_category';
    protected $primaryKey = 'categoryID';
    protected $fillable = [
        'name','userID'
    ];
}
