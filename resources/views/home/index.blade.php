@extends('layouts.main')

@section('page.title', 'Головна Шкварка-Shop')


 
@section('main.content')


<section>


    @if ($posts->isEmpty())
    <div class="empty-cart-container">
        <div class="empty-cart-message">
            <h3>Товар не знайдено</h3>
            <a href="{{ route('home') }}" class="btn btn-success">{{ __('Повернутися на головну') }}</a>
        </div>
    </div>
    @else
        <div class="row row-cols-2 row-cols-md-4 g-4">
            @foreach ($posts as $post)
                <div class="col" style="margin: 0px">
                    <x-post.card :post="$post"/>
                </div>
            @endforeach   
        </div>
        <div class="pagination">
        {{ $posts->links() }}
    </div>

        
    @endif
</section>
@endsection
