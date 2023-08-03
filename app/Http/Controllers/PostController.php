<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class PostController extends Controller
{
    public function index()
    {
        return view ('blog', [
            "title" => "Blog",
            "blog" => Blog ::all()
        ]);
    }
    public function show($slug)
    {
        return view ('blog_post',[
            "title" => "Single Post",
            "post" => Blog::find($slug)
        ]);
    }
}
