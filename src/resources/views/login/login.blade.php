@extends('app')

@section('content')
    <div class="container">
        <form class="container__form">
            <h2>Авторизация</h2>
            <label class="form__label" for="username">Логин:</label>
            <input class="form__input" type="text" id="username" name="username" required>

            <label class="form__label" for="password">Пароль:</label>
            <input class="form__input" type="password" id="password" name="password" required>

            <input class="form__submit" type="submit">
        </form>
    </div>
@endsection