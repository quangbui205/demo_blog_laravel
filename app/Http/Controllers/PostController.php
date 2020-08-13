<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;
    protected $categoryService;

    public function __construct(PostService $postService,
                                CategoryService $categoryService)
    {
        $this->categoryService =$categoryService;
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAll();
        return view('post.index',compact('posts'));
    }

    public function create()
    {
        $categories = $this->categoryService->getAll();
        return view('post.add', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->postService->store($request);
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = $this->postService->findById($id);
        $categories = $this->categoryService->getAll();
        return view('post.edit',compact('post','categories'));
    }

    public function update(Request $request, $id)
    {
        $this->postService->update($request, $id);
        toastr()->success('Update Success!');
        return redirect()->route('post.index');
    }

    public function delete($id)
    {
        $post = $this->postService->findById($id);
        $this->postService->delete($post);
        return redirect()->route('post.index');
    }
}
