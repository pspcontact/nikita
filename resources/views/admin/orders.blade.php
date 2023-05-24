@extends('layouts.admin')
@section('content-admin')
    <div class="">
        <table class="orders-table">
            <tr class="orders-table-title">
                <td>Имя</td>
                <td>Товар</td>
                <td>Адрес</td>
                <td>Телефон</td>
            </tr>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->user['name'] }}</td>
                    <td>{{ $order->item['name'] }}</td>
                    <td>{{ $order->adress }}</td>
                    <td>{{ $order->phone }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
