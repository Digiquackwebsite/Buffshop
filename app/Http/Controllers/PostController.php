<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function edit(Post $post)
{
    //dd($post);
    return view('posts.edit', compact('post'));
}

public function update(Request $request, Post $post)
{
    // Validate the input data
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    // Update the post
    $post->update([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
    ]);

    return redirect()->route('posts.index')->with('success', 'Post updated successfully');
}

public function destroy(Post $post)
{
    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
}

}
