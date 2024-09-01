@extends('layouts.base')

@include('includes.user-header')
@section('content')
    <section class="main-section">
        <x-container>
            <div class="main-content">
            
                    @yield('user.content')
           
            </div>
        </x-container>
    </section>
@endsection
