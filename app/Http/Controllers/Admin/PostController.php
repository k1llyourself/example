<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return 'Сторінка списку постів';

    }

    public function create(){
        return 'Сторінка створення посту';
    }

    public function store(){
        return 'Запрос створення посту';
    }

    public function show($post){
        return "Сторінка перегляду посту {$post}";
    }

    
    public function edit($post){
        return "Сторінка зміни посту {$post}";
    }
    
    public function update(){
        return 'Запрос зміни посту';
    }

    
    public function delete(){
        return 'Сторінка видалення посту';
    }
    
    public function like(){
        return 'Лайк + 1';
    }
}

