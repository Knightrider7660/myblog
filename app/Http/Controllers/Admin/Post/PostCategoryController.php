<?php

namespace App\Http\Controllers\Admin\Post;

use App\Admin\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostCategoryController extends Controller
{
    public function index(){
        $table = PostCategory::orderBy('categoryID', 'DESC')->get();
        return view('admin.Post.postcategory')->with(['table' => $table]);
    }
    public function save(Request $request){
        $table = new PostCategory();
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= PostCategory::find($request->id);
        $table->name = $request->name;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function del($id){
        $table = PostCategory::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
