<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Метод для відображення форми
    public function create()
    {
        return view('categories.create');
    }

    // Метод для збереження нової категорії
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Створення нової категорії
        Category::create($validated);
        

        return response()->json(['success' => true]);
    }
    
    public function destroy($id)
{
    try {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json(['success' => false]);
    }
}



}
