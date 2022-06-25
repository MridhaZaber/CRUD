<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    private $blogs;
    private $blog;
    public function index()
    {
        return view('blog.add');
    }
    public function create(Request $request)
    {
        Blog::newBlog($request);
        return redirect('/add-blog')->with('message','Blog Info Create Successfully');
    }
    public function manage()
    {
        $this->blogs=Blog::all();
        return view('blog.manage',['blogs'=>$this->blogs]);

    }
    public function edit($id)
    {

        $this->blog=Blog::find($id);
        return view('blog.edit',['blog'=>$this->blog]);
    }
    public function update(Request $request, $id)
    {
            Blog::updateBlog($request,$id);
            return redirect('/manage-blog')->with('message','Blog Info Successfully Udated.');

     }
     public function delete($id)
     {
         Blog::deleteBlog($id);
         return redirect('/manage-blog')->with('message','Blog Info Successfully Delete.');

     }



}
