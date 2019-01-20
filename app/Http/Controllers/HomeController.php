<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard')
                                      ->with('posts_count', Post::all()->count())
                                      ->with('trashed_count', Post::onlyTrashed()->get()->count())
                                      ->with('categories_count', Category::all()->count())
                                      ->with('users_count', User::all()->count());
    }
}
