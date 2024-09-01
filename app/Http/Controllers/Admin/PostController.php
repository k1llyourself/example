<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $category_id = $request->input('category_id');

        $post = (object) [
            'id' => 123,
            'title' => 'Lorem, ipsum dolor.',
            'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis?',
            'price' => '38',
            'category_id' => 1,
        ];


        $posts = array_fill(0, 10, $post);

        return view('admin.posts.index', compact('posts'));

    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'content' => ['nullable', 'string', 'max:100'],
            'price' => ['required', 'string'],

        ]);

        // Post::create($validated);   

        // $validated = validator($request->all(),[
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string', 'max:100']

        // ])->validate();
        dd($validated);
        
        // return 'Запрос створення посту';
        return redirect()->route('admin.posts.show', 123);

    }

    public function show($post){
        
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem, ipsum dolor.',
            'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis?',
            'price' => '38',
            'category_id' => 1,
        ];


        return view('admin.posts.show', compact('post'));
    }

    
    public function edit($post){
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem, ipsum dolor.',
            'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis?',
            'price' => '38',
            'category_id' => 1,
        ];
        return view('admin.posts.edit', compact('post'));
    }
    
    public function update(Request $request, $post){

        // $title = $request -> input('title');
        // $content = $request -> input('content');
        // $content = $request -> input('price');

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'content' => ['nullable', 'string', 'max:100'],
            'price' => ['required', 'string'],

        ]);
        
        return redirect()->route('admin.posts.show', $post);
    }

    
    public function delete(Request $request, $post){
        return redirect()->route('admin.posts.index', $post);
    }
    
    public function like(){
        return 'Лайк + 1';
    }
}

