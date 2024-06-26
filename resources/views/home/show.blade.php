@extends('layouts.main')

@section('page.title', $post -> title)

@section('main.content')

<section>
    
    <x-title>
        {{$post-> title}}


        <x-slot name="link">
            <a href="{{route('home')}}">
                {{__('Назад')}}
            </a>
        </x-slot>
</x-title>

{!! $post -> content !!}


@endsection