<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class AdminBlogController extends Controller
{
    public function blogIndex(){

        $b = DB::table('blogs')
        ->get();

        return view('admin.blog.blog_index')->with(['blog'=>$b]);
    }

    public function blogCreate(){
        return view('admin.blog.blog_create');
    }

    public function PostBlogCreate(Request $request){

        $topic = $request->input('topic');
        $content = $request->input('content');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/blog/blog_create')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img", $imageName);
        } else {
            $imageName = null;
        }
        $date = $request->input('date');

        $b = DB::table('blogs')
        ->insert([
            'id'=>null,
            'topic'=>$topic,
            'content'=>$content,
            'image'=>$imageName,
            'date'=>$date
        ]);

        return redirect('admin/blog/blog_index');
    }

    public function blogUpdate($id){
        $b = DB::table('blogs')
        ->where('id', intval($id))
        ->first();
        return view('admin.blog.blog_update')->with(['b'=>$b]);
    }

    public function PostBlogUpdate(Request $request, $id){
        $topic = $request->input('topic');
        $content = $request->input('content');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/blog/blog_update')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img", $imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $b = DB::table('blogs')
                ->where('id', intval($id))
                ->first();
            $imageName = $b->image;
        }

        $date = $request->input('date');

        $b = DB::table('blogs')
        ->where('id', intval($id))
        ->update([
            'topic'=>$topic,
            'content'=>$content,
            'image'=>$imageName,
            'date'=>$date
        ]);

        return redirect('admin/blog/blog_index');
    }

    public function deleteBlog($id){

        $b = DB::table('blogs')
        ->where('id', intval($id))
        ->delete();

        return redirect('admin/blog/blog_index');
    }

}
