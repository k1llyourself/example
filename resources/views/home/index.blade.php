@extends('layouts.main')

@section('page.title', 'Головна Шкварка-Shop')

@section('main.content')

<section>
    
    <x-title>
        {{__('Список товарів')}}
</x-title>

<x-form action="{{route('home')}}" method="get">
        @include('home.filter')   
</x-form>



@if (empty($posts))

    {{__('Товару немає')}}

    @else
        
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-12 col-md-4" >
                <x-post.card :post="$post"/>
            </div>
    @endforeach   
    </div>

@endif


@endsection