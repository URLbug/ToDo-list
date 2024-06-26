@extends('app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('login') }}" class="container__form">
            <h2>Авторизация</h2>
            @csrf

            <label class="form__label" for="username">Логин:</label>
            <input class="form__input" type="text" id="username" name="username" required>

            <label class="form__label" for="password">Пароль:</label>
            <input class="form__input" type="password" id="password" name="password" required>

            <div class="error">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="error" style="color: red;">{{ $error }}</p>
                    @endforeach
                @endif
            </div>

            <input class="form__submit" type="submit">

            <a href="{{ route('regist') }}" class="login">Нету аккаунт?</a>
        </form>
    </div>
@endsection