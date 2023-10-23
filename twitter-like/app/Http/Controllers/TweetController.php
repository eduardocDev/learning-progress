<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tweets = Tweet::all();
        return view('welcome', ['tweets' => $tweets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tweets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if (is_null($data['body'])) {
            return redirect('tweets');
        }

        Tweet::create($data);

        return redirect('tweets');
    }

    /**
     * Display the specified resource.
     */
    public function show(tweet $tweet)
    {
        $tweet = Tweet::find($tweet->id);
        return view('tweets.show', ['tweet' -> $tweet]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tweet $tweet)
    {
        return view('tweets.edit', ['tweet' -> $tweet]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tweet $tweet)
    {
        $data = $request->all();

        $tweet->update($data);

        return redirect('/tweets/' , $tweet->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tweet $tweet)
    {
        $tweet->delete();

        return redirect('tweets');
    }
}