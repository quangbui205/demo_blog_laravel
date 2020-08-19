<?php


namespace App\Http\Services;


use App\Http\Repositories\PostRepository;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostService
{
    protected $postRepo;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepo=$postRepository;
    }

    public function getAll()
    {
        return $this->postRepo->getAll();
    }

    public function getDataPaginate()
    {
        return $this->postRepo->getDataPaginate();
    }

    public function findById($id)
    {
        return $this->postRepo->findById($id);
    }

    public function store($request)
    {
        $post= new Post();
        $user = Auth::user();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->user_id = $user->id;
        if($request->hasFile('image'))
        {

            $path = $request->file('image')->store('images','public');
            $post->image = $path;
        }

        $this->postRepo->save($post);
    }

    public function update($request, $id)
    {
        $post = $this->postRepo->findById($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        if($request->hasFile('image'))
        {
            $postImage = $post->image;
            if($postImage)
            {
                Storage::delete('/public/storage/'.$postImage);
            }
            $imageNew = $request->file('image')->store('images','public');
            $post->image = $imageNew;
        }
        $this->postRepo->save($post);
    }
    public function delete($post)
    {
        $this->postRepo->delete($post);
    }
}
