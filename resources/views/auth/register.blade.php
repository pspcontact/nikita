@extends('layouts.main')
@section('content-main')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">{{ __('Имя') }}</label>

            <div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="email">{{ __('Адрес электронной почты') }}</label>

            <div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="password">{{ __('Пароль') }}</label>

            <div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label for="password-confirm">{{ __('Подтвердите пароль') }}</label>

            <div>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <div>
            <div>
                <button type="submit">
                    {{ __('Зарегистрироваться') }}
                </button>
            </div>
        </div>
    </form>
@endsection
