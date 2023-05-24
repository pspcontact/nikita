@extends('layouts.admin')
@section('content-admin')
    <form action="{{ route('storeCategory') }}" method="post" class="form-admin_store">
        @csrf
        <h1>Добавить категорию</h1>
        <input type="text" name="name" placeholder="Название">
        <button type="submit">Добавить</button>
    </form>
    <table class="category-table">
        <tr>
          <td>Название</td>
          <td></td>
          <td></td>
        </tr>
        @foreach ($categories as $category)
            <tr>
              <td>{{ $category->name }}</td>
              <td><a href="{{ route('editCategory', $category->id) }}" class="buttons-item-category">Изменить</a></td>
              <td><a href="{{ route('deleteCategory', $category->id) }}" class="buttons-item-category">Удалить</a></td>
            </tr>
        @endforeach
    </table>
@endsection
