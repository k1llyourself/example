@extends('layouts.user')

@section('page.title', 'Редагувати пост')

@section('user.content')
    <x-title>
        
    <h1 style="font-weight: bold; color: black; margin: 10px 0;" >Редагування</h1>
    </x-title>

    <x-post.form :post="$post" :categories="$categories">
        <x-button type="submit">
            {{ __('Зберегти') }}
        </x-button>
    </x-post.form>

    <form action="{{ route('user.posts.destroy', $post) }}" method="post" onsubmit="return confirm('Ви впевнені, що хочете видалити цей пост?')">
        @csrf
        @method('DELETE')
        <x-button type="submit" class="btn btn-danger"  style="margin-top: 10px;padding: 10px; width: 100%; font-weight: bold; border-radius: 3px;">
            {{ __('Видалити') }}
        </x-button>
    </form>
@endsection
