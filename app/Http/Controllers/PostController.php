<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.posts.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('img')) 
        {
            $file = $request->file('img');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move('images/', $imageName);
            $requestData['img'] = $imageName;
        }

        Post::create($requestData);



        return redirect()->route('admin.posts.index')->with('success', 'Ma`lumot qo`shildi');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('admin.posts.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('admin.posts.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();

        if ($request->hasFile('img')) 
        {
            
            $posts = Post::find($id);

            if (isset($posts->img) && file_exists(public_path('/images/'.$posts->img))) {
                unlink(public_path('/images/' . $posts->img));

                $file = $request->file('img');
                $imageName = time().'-'.$file->getClientOriginalName();
                $file->move('images/', $imageName);
                $requestData['img'] = $imageName;
            }

        }

        Post::find($id)->update($requestData);

        return redirect()->route('admin.posts.index')->with('success', 'Ma`lumot o`zgartirildi');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('admin.posts.index');

    }
}
