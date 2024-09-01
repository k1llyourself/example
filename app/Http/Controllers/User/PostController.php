<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth'); // Додаємо middleware для всіх методів контролера
    }



    public function index(Request $request)
{
    $query = Post::query()->latest('created_at');

    if ($request->filled('category_id')) {
        $query->where('category_id', $request->input('category_id'));
    }

    if ($request->filled('search')) {
        $query->where('title', 'like', '%'.$request->input('search').'%');
    }

    $posts = $query->paginate(30);

    $categoriesFromDb = Category::all();

        // Створення асоціативного масиву з категоріями
        $categories = [null => 'Всі категорії'] + $categoriesFromDb->pluck('name', 'id')->toArray();

    return view('user.posts.index', compact('posts', 'categories'));
}



    public function create()
    {
        $categoriesFromDb = Category::all();

        // Створення асоціативного масиву з категоріями
        $categories = [null => 'Всі категорії'] + $categoriesFromDb->pluck('name', 'id')->toArray();
        return view('user.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'content' => ['nullable', 'string', 'max:1000'],
            'price' => ['required', 'numeric'],
            'unit' => ['required', 'string', 'in:zł/шт,zł/кг'],
            'published' => ['nullable', 'boolean'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'image' => ['nullable', 'image', 'max:4096'], // Головне зображення
            'additional_images.*' => ['nullable', 'image', 'max:4096'] // Додаткові зображення
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
    
        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $validated['title'],
            'content' => $validated['content'] ?? null,
            'price' => $validated['price'],
            'unit' => $validated['unit'],
            'published' => $validated['published'] ?? false,
            'category_id' => $validated['category_id'],
            'image_path' => $imagePath
        ]);
    
        // Зберігаємо додаткові зображення
        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $additionalImage) {
                $additionalImagePath = $additionalImage->store('images', 'public');
                $post->images()->create(['image_path' => $additionalImagePath]);
            }
        }
    
        return redirect()->route('user.posts.show', $post);
    }
    

    public function show(Post $post)
    {
        return view('user.posts.show', compact('post'));
    }

public function edit(Post $post)
{
    $categoriesFromDb = Category::all();

    // Створення асоціативного масиву з категоріями
    $categories = [null => 'Всі категорії'] + $categoriesFromDb->pluck('name', 'id')->toArray();
    $additionalImages = $post->images; // Отримання додаткових зображень
    return view('user.posts.edit', compact('post', 'categories', 'additionalImages'));
}

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'content' => ['nullable', 'string', 'max:1000'],
            'price' => ['required', 'numeric'],
            'unit' => ['required', 'string', 'in:zł/шт,zł/кг'],
            'published' => ['nullable', 'boolean'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'image' => ['nullable', 'image', 'max:4096'],
            'additional_images.*' => ['nullable', 'image', 'max:4096'], // Додаткові зображення
            'remove_additional_images' => ['nullable', 'array'], // Зображення для видалення
        ]);
    
        // Оновлення головного зображення
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $post->image_path;
        }
    
        $post->update([
            'title' => $validated['title'],
            'content' => $validated['content'] ?? null,
            'price' => $validated['price'],
            'unit' => $validated['unit'],
            'published' => $validated['published'] ?? false,
            'category_id' => $validated['category_id'],
            'image_path' => $imagePath
        ]);
    
        // Видалення додаткових зображень
        if ($request->filled('remove_additional_images')) {
            $post->images()->whereIn('id', $request->input('remove_additional_images'))->delete();
        }
    
        // Додавання нових додаткових зображень
        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $additionalImage) {
                $additionalImagePath = $additionalImage->store('images', 'public');
                $post->images()->create(['image_path' => $additionalImagePath]);
            }
        }
    
        return redirect()->route('user.posts.show', $post);
    }    public function destroy(Post $post)
{
    $post->delete();
    return redirect()->route('user.posts');
}




}
