@extends('layouts.admin')
@section('content-admin')
    <form action="{{ route('updateItem', $item->id) }}" method="post" enctype="multipart/form-data" class="form-admin_store">
        @csrf
        <h1>Изменить товар</h1>
        <input type="text" name="name" placeholder="Название" value="{{ $item->name }}">
        <textarea name="description" cols="30" rows="10">{{ $item->description }}</textarea>
        <input type="file" name="filename">
        <input type="number" placeholder="Цена" name="price" value="{{ $item->price }}">
        <select name="category_id" required>
            @foreach ($categories as $category)
                <option name="category_id" value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">Изменить</button>
    </form>
@endsection
