<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class AdminController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function blog2() {
    $blog2 = Blog::paginate(10);
    return view("blog2", compact("blog2"));
    }
    function about2(){
        $name = "tanakit";
    $date = "6 กรกฎาคม 2026";

    return view("about2", compact("name", "date"));

    }
    function create(){
        return view('form');
    }
    function insert(Request $request){
        $request->validate(
            [
                "title" => "required|max:255",
                "content" => "required",
            ],[
                "title.required" => "กรุณาระบุชื่อบทความ",
                "title.max" => "ชื่อบทความต้องไม่เกิน 255 ตัวอักษร",
                "content.required" => "กรุณาระบุเนื้อหาบทความ",
            ]);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        Blog::insert($data);

        return redirect()->route('blog2')->with('success', 'บันทึกบทความเรียบร้อยแล้ว');
    }
    function delete($id){
        Blog::find($id)->delete();
        return redirect()->back();
    }
    function chang($id){
       $blog = Blog::find($id);
       $data=['status'=>$blog->status];
       if($blog->status ==1){

        $data=['status'=>0];
    }else{
        $data=['status'=>1];
    }
       Blog::find($id)->update($data);
       return redirect()->back();
    }
    function edit($id){
       $blog = Blog::find($id);
        return view('edit',compact('blog'));
    }
    function update(Request $request,$id){
        $request->validate(
            [
                "title" => "required|max:255",
                "content" => "required",
            ],[
                "title.required" => "กรุณาระบุชื่อบทความ",
                "title.max" => "ชื่อบทความต้องไม่เกิน 255 ตัวอักษร",
                "content.required" => "กรุณาระบุเนื้อหาบทความ",
            ]);
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        Blog::find($id)->update($data);
        return redirect()->route('blog2')->with('success', 'อัปเดตบทความเรียบร้อยแล้ว');
    }
}