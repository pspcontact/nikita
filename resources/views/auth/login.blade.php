@extends('layouts.main')

@section('content-main')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="">
            <label for="email" class="">{{ __('Адрес электронной почты') }}</label>
            <div class="">
                <input id="email" type="email" class="" @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="">
            <label for="password" class="">{{ __('Пароль') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="">
            <div class="">
                <button type="submit" class="">
                    {{ __('Войти') }}
                </button>
            </div>
        </div>
    </form>
@endsection
