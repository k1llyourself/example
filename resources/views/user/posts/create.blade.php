@extends('layouts.user')
@section('page.title', 'Створити пост')

@section('user.content')
<h1 style="font-weight: bold; color: black; margin: 10px 0;" >Створити</h1>

    <x-post.form action="{{ route('user.posts.store' , $categories ) }}" method="post" :categories="$categories">
            <x-button type="submit">
                {{ __('Створити') }}
            </x-button>
    </x-post.form>


@endsection