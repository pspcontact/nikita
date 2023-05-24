@extends('layouts.main')
@section('content-main')
    @if ($items->count() > 0)
        <div class="items-in-cart-wrapper">
            <h2>Товары</h2>
            @foreach ($items as $item)
                <div class="item-in-cart">
                    <h4>{{ $item->name }}</h4>
                    <form action="{{ route('deleteItemInCart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <button>Удалить</button>
                    </form>
                </div>
            @endforeach
            <h4>Итого: {{ $countMoney }} русских долларов</h4>
        </div>
        <form class="cart-form" action="{{ route('storeOrder') }}" method="post">
            @csrf
            <h4>Укажите ваш адрес</h4>
            <input type="text" name="adress" required>
            <h4>Укажите ваш телефон</h4>
            <input type="tel" name="phone" required>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <button>Оформить заказ</button>
        </form>
        @else
        <h1 style="margin: 100px auto;text-align:center;">Корзина пуста :(</h1>
    @endif 
@endsection
