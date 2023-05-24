@extends('layouts.admin')
@section('content-admin')
    <form action="{{ route('storeItem') }}" method="post" enctype="multipart/form-data" class="form-admin_store">
        @csrf
        <h1>Добавить товар</h1>
        <input type="text" name="name" placeholder="Название" required>
        <textarea name="description" cols="30" rows="10" required></textarea>
        <input type="file" name="filename" required>
        <input type="number" placeholder="Цена" name="price" required>
        <select name="category_id" required>
            @foreach ($categories as $category)
                <option name="category_id" value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">Добавить</button>
    </form>
    <div class="items-admin-wrapper">
        @foreach ($items as $item)
            <div class="item">
                <img src="{{ asset('images/' . $item->filename) }}">
                <h2>{{ $item->name }}</h2>
                <h3>Цена: {{ $item->price }} рубликов</h3>
                @if (!empty($item->category['name']))
                    <h3>Категория: {{ $item->category['name'] }}</h3>
                @endif
                <div class="item-buttons">
                    <a href="{{ route('editItem', $item->id) }}">Изменить</a>
                    <a href="{{ route('deleteItem', $item->id) }}">Удалить</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
