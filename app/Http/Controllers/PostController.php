<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\{Post, Category, Comment};

class PostController extends Controller
{
    public function index()
    {
        $title = "LaraTuto";

        $posts = Post::all();
        return view('post.index', compact('title', 'posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'
         ]);

        Post::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'category_id' => $request->category_id
        ]);
        return redirect('/posts')->with('msg','a post created successfully');
    }

    public function edit($id)
    {
        $post = Post::find($id); 
        return view('post.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required'
         ]);

        $post=Post::find($id);
        $post->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('/posts')->with('msg','a post updated successfully');
    }

    public function destory($id)
    {
        Post::find($id)->delete();
        return back()->with('msg','a post deleted');
    }

    # post with comment
    public function postCommentIndex($id)
    {
        $post = Post::find($id);
        $comments = Comment::where('post_id', '=', $id)->get();
        return view('post.comment', compact('post', 'comments'));
    }

    public function denyComment($commentId)
    {
       $comment = Comment::find($commentId);
       $comment->status = 'denied';
       $comment->save();
       return back()->with('msg', 'comment has been denied successfully');
    }

}