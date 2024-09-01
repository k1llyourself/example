@extends('layouts.auth')

@section('page.title', 'Реєстрація - Шкварка-Shop')

@section('auth.content')
<x-card>
    <x-card-header>
        <x-card-title>
            
                {{ __('Реєстрація') }}
            
        </x-card-title>

        <x-slot name="right">
            <a href="{{route('login')}}"> 
                {{__('Вхід')}}
            </a>
        </x-slot>
    </x-card-header>

    <x-card-body>
        <x-errors />
        <x-form action="{{route('register.store')}}" method="POST">
            <x-form-item>
                <x-label required>{{__('Username')}}</x-label>
                <x-input type="username" name="username" autofocus />
            </x-form-item>

            <x-form-item>
                <x-label required>{{__('Пароль')}}</x-label>
                <x-input type="password" name="password" />
            </x-form-item>

            <x-form-item>
                <x-label required>{{__('Пароль')}}</x-label>
                <x-input type="password" name="password_confirmation" />
            </x-form-item>

            
            <x-button type="submit">
                {{__('Зареєструватися')}}
            </x-button>

        </x-form>
    </x-card-body>
</x-card>

@endsection
