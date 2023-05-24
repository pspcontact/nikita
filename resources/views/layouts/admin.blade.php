@extends('layouts.app')
@section('title', 'Административная панель')
@section('content')
    <nav class="nav-admin">
        <div class="nav-left_block">
            <div class="logo"></div>
            <a href="/">Вернуться на сайт</a>
            <a href="/admin">Товары</a>
            <a href="/admin/category">Категории</a>
            <a href="/admin/orders">Заказы</a>
        </div>
        <div class="nav-right_block">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                {{ __('Выйти') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </div>
    </nav>
    @yield('content-admin')
@endsection
