@extends('layouts.admin')
@section('content-admin')
    <form action="{{ route('updateCategory', $category->id) }}" method="post" class="form-admin_store">
        @csrf
        <h1>Изменить категорию</h1>
        <input type="text" name="name" placeholder="Название" value="{{ $category->name }}">
        <button type="submit">Изменить</button>
    </form>
@endsection
