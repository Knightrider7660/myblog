<?php

namespace App\Http\Controllers\Admin\Post;

use App\Admin\Posts;
use App\Admin\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $category = PostCategory::orderBy('categoryID', 'DESC')->get();
        $table = Posts::orderBy('postID', 'DESC')->get();
        return view('admin.Post.posts')->with(['category'=>$category,'table' => $table]);
    }
    public function save(Request $request){
        $table = new Posts();
        $table->categoryID = $request->categoryID;
        $table->title = $request->title;
        $table->post = $request->post;
		//image upload
        if ($request->hasFile('imageName')) {

            $extnshon = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extnshon;

            $table->imageName = $filename;

            $request->imageName->move('public/uploads',$filename);
        }
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= Posts::find($request->id);
        $table->categoryID = $request->categoryID;
        $table->title = $request->title;
        $table->post = $request->post;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function del($id){
        $table = Posts::find($id);
        $table->delete();
        return back();
    }
}
