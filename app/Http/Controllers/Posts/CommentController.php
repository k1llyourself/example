<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

       public function store(Request $request)
    {
        //
    }

    public function show($post, $comment)
    {
        return "Сторінка коментаря {$comment} (пост {$post})";
    }

    public function edit($post, $comment)
    {
        return "Змінити коментар {$comment} (пост {$post})";
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}