<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Services\PostService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $postService;
    protected $categoryService;

    public function __construct(PostService $postService,
                                CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
        $this->postService = $postService;
    }

    public function index()
    {
        Carbon::setLocale('vi');
        $categories =$this->categoryService->getAll();
        $posts = $this->postService->getDataPaginate();
        return view('blogIndex', compact('posts','categories'));
    }
}
