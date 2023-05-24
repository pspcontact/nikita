@extends('layouts.app')
@section('title', 'Настолка')
@section('content')
<nav class="nav-main">
    <div class="nav-main-left_block">
        <div class="logo"></div>
        <a href="/">Главная</a>
        <a href="/">О нас</a>
        <a href="/">Адреса магазинов</a>
        <a href="/">Контакты</a>
    </div>
    <div class="nav-main-right_block">
        @guest
            @if (Route::has('login'))
                <a href="{{ route('login') }}">{{ __('Войти') }}</a>
            @endif

            @if (Route::has('register'))
                <a class="nav-register" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
            @endif
        @else
            <a href="/cabinet">{{ Auth::user()->name }}</a>
            <a href="{{ route('showCart', Auth::user()->id) }}">Корзина</a>
            <div>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    {{ __('Выйти') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        @endguest
    </div>
</nav>
@yield('content-main')
@endsection