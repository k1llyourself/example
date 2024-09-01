<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;


class BlogController extends Controller
{

    public function index(Request $request)
    {
        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:50'],
            'category_id' => ['nullable', 'integer', 'exists:categories,id'],
        ]);

        $query = Post::query()->where('published', true);

        if ($search = $validated['search'] ?? null) {
            $query->where('title', 'like', "%{$search}%");
        }

        if ($category_id = $validated['category_id'] ?? null) {
            $query->where('category_id', $category_id);
        }

        $posts = $query->latest('created_at')->paginate(20);

        $categoriesFromDb = Category::all();

        // Створення асоціативного масиву з категоріями

        return view('home.index', compact('posts'));
    
    }

    public function show(Request $request, Post $post)
    {
        $similarPosts = Post::where('category_id', $post->category_id)
                        ->where('id', '!=', $post->id)
                        ->take(4)
                        ->get();

    return view('home.show', compact('post', 'similarPosts'));  
    }
}

