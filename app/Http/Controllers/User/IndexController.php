<?php

namespace App\Http\Controllers\User;

use App\Admin\PostCategory;
use App\Admin\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $postcat = PostCategory::orderBy('categoryID', 'DESC')->get();
        $post = Posts::orderBy('postID', 'DESC')->get();
        $postside = Posts::orderBy('postID', 'DESC')->paginate(4);
        return view('index')->with(['postcat'=>$postcat, 'post'=> $post,'postside'=>$postside]);
    }
}
