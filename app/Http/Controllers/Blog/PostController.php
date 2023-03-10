<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog\Post;
use App\Models\Blog\Category;
use App\Models\Blog\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());
        $posts = $user->posts;

        return view('admin.blog.posts', [

            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.blog.add_post', [

            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'title' => 'required',
            'img_url' => 'required',
            'content' => 'required',

        ]);

        if($request->file('img_url')) {

            $file = $request->file('img_url');
            $filename = str::random(20).'_'.$file->getClientOriginalName();
            $file->move(public_path('upload/Blog'),$filename);

            $data = new Post;

            $data->user_id = Auth::id();
            $data->title = $request->input('title');
            $data->img_url = $filename;
            $data->content = strip_tags($request->input('content'));

            $data->save();
            $data->categories()->sync($request->categories);
            $data->tags()->sync($request->tags);

            $notification = array(
                'message' => 'A Post Has been Created',
                'alert-type' => 'success'
            );
            return redirect()->route('post.create')->with($notification);
    
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
