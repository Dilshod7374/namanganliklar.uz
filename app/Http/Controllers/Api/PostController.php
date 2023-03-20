<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PostResource::collection(Post::with('category')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('img')) 
        {
            $file = $request->file('img');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move('images/', $imageName);
            $requestData['img'] = $imageName;
        }
        Post::create($request->all());



        return response(['success' => 'Post muvaffaqayiyatli qo`shildi']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json($post);
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
            if (isset($posts->img) and file_exists(public_path('/images/'.$posts->img))) {
                unlink(public_path('/images/' . $posts->img));
                $file = $request->file('img');
                $imageName = time().'-'.$file->getClientOriginalName();
                $file->move('images/', $imageName);
                $requestData['img'] = $imageName;
            }
        }

        $post = Post::find($id)->update($requestData);

        return 'Ma`lumot o`zgartirildi';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return 'deleted';
    }
}
