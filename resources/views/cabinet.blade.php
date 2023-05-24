@extends('layouts.main')
@section('content-main')
<div class="cabinet-wrapper">
    <h1>{{Auth::user()->name}}</h1>
</div>
@endsection
