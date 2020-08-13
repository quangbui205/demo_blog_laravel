<?php


namespace App\Http\Repositories;


use App\Post;

class PostRepository
{
    protected $post;
    public function __construct(Post $post)
    {
        $this->post=$post;
    }

    public function getAll()
    {
        return $this->post->all();
    }

    public function getDataPaginate()
    {
        return $this->post->paginate(5);
    }

    public function save($post)
    {
        $post->save();
    }

    public function findById($id)
    {
        return $this->post->findOrFail($id);
    }

    public function delete($post)
    {
        $post->delete();
    }
}
