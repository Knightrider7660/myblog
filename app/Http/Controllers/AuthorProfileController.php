<?php

namespace App\Http\Controllers;

use App\Admin\PostCategory;
use Illuminate\Http\Request;

class AuthorProfileController extends Controller
{
    public function index(){
        $postcat = PostCategory::orderBy('categoryID', 'DESC')->get();
        return view('authorprofile')->with(['postcat'=>$postcat]);
    }
}
