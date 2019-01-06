<?php

namespace App\Http\Controllers\User;

use App\Admin\PostCategory;
use App\Admin\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategorySessionController extends Controller
{
    public function index($id){

        $table = PostCategory::find($id);

        session([
            'categoryID' => $table->categoryID,
            'categoryName' => $table->name
        ]);
        $postcat = PostCategory::orderBy('categoryID', 'DESC')->get();
        $post = Posts::where('categoryID', session('categoryID'))->orderBy('postID', 'DESC')->get();
        $table = Posts::orderBy('postID', 'DESC')->get();
        return view('catwisepost')->with(['postcat'=>$postcat, 'post'=> $post,'table'=>$table]);
    }

}
