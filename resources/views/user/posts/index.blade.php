@extends('layouts.user')
@section('page.title', 'Адмін товари Шкварка-Shop')

@section('user.content')

<section>
    <h1 style="font-weight: bold; margin: 20px 0;">Всі товари</h1>
    
    @if ($posts->isEmpty())
    <div class="empty-cart-container">
        <div class="empty-cart-message">
            <h3>Товар не знайдено</h3>
            <a href="{{ route('user.posts.create') }}" class="btn btn-success">{{ __('Додати товар') }}</a>
        </div>
    </div>
    @else
        <div id="user-container" class="user-items-container">
            @foreach($posts as $post)
                <div class="user-item">
                    <div class="user-image-container">
                        <div class="user-item-image">
                            @if($post->image_path)
                                <img class="user-show-img" src="{{ Storage::url($post->image_path) }}" alt="{{ $post->title }}">
                            @else
                                <p>Зображення не доступне</p>
                            @endif
                        </div>
                    </div>
                        
                    <div class="user-item-details">
                        <h3 class="user-item-title">
                            <a href="{{ route('user.posts.show', $post->id) }}">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <div class="user-item-row">
                            {{ $post->price }} {{ __('zł') }}
                        </div>
                        <div class="small text-muted">
                            {{ $post->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $posts->links() }}
        </div>
    
    @endif
</section>

@endsection
