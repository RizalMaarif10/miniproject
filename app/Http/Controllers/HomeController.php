<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tweets = Tweet::latest()->get();
        $posts = Post::with('user')->latest()->get();
        $usersToFollow = User::where('id', '!=', $user->id)->get();

        return view('home', compact('user', 'posts', 'usersToFollow','tweets'));
    }

    
}
