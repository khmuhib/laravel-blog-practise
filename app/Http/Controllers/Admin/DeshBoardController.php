<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DeshBoardController extends Controller
{
    public function index() {

        $category =  Category::count();
        $posts =  Post::count();
        $users =  User::where('role_as', '0')->count();
        $admin =  User::where('role_as', '1')->count();
        return view('admin.deshboard', compact('category', 'posts', 'users', 'admin'));
    }
}
