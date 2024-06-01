<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:255',
            'tweetImage' => 'image|nullable|max:1999'
        ]);

    
        if($request->hasFile('tweetImage')){
            $filenameWithExt = $request->file('tweetImage')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('tweetImage')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('tweetImage')->storeAs('public/tweet_images', $fileNameToStore);
        } else {
            $fileNameToStore = null;
        }

        
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $request->body,
            'image' => $fileNameToStore
        ]);

        return redirect()->back()->with('success', 'Tweet Posted!');
    }
}
