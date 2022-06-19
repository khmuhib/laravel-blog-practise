<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index () {
        return view('frontend.index');
    }

    public function viewCategoryPost ($category_slug) {
        $category = Category::where('slug', $category_slug)->where('status', '0')->first();
        if($category){
            $post =  Post::where('category_id', $category->id)->where('status', '0')->paginate(3);
            return view('frontend.post.index', compact('post', 'category'));
        }else {
            return redirect('/');
        }
    }
}
