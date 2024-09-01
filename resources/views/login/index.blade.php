@extends('layouts.auth')

@section('page.title', 'Вхід - Шкварка-Shop')

@section('auth.content')

<x-card>
    <h1 style="font-weight: bold; margin:20px 10px;">Вхід</h1>

    <div class="card-body" style="margin: 10px 10px;">
        <x-errors />
        <x-form action="{{route('login.store')}}" method="POST">
            <x-form-item>
                <x-label required>{{ __( 'Ім\'я користувача' ) }}</x-label>
                <x-input type="text" name="username" value="{{ old('username')}}" autofocus />
            </x-form-item>

            <x-form-item>
                <x-label required>{{__('Пароль')}}</x-label>
                <x-input type="password" name="password" />
            </x-form-item>

            <div class="empty-cart-message">
                <x-button class="btn btn-success" type="submit">
                    {{__('Увійти')}}
                </x-button>
            </div>
           

        </x-form>
    </div>
</x-card>

@endsection
