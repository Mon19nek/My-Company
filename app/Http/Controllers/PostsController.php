<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Partner;

class PostController extends Controller 
{
    public function home()
    {
        $partners = Partner::all();
        // Lấy danh sách các danh mục từ bảng 'categories'
        $categories = Category::with('posts')->get();

        // Truyền cả hai biến vào view
        return view('home', compact( 'categories','partners'));
    }
    public function show($id)
{
    // Lấy thông tin sản phẩm từ ID
    $post = Post::find($id);
    // Trả về view hiển thị chi tiết sản phẩm
    return view('post.show', ['post' => $post, 'title' => $post->title]);
}
}
