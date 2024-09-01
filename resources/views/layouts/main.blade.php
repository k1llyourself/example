@extends('layouts.base')

@include('includes.header')
@section('content')
    <section class="main-section">
        <x-container>
            <div class="main-content">
            
                    @yield('main.content')
           
            </div>
        </x-container>
    </section>
@endsection
