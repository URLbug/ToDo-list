@extends('app')

@section('content')
    <div class="container">
        <form action="{{ route('regist') }}" class="container__form" method="POST">
            @csrf
            
            <h2>Регестрация</h2>
            <label class="form__label" for="username">Логин:</label>
            <input class="form__input" type="text" id="username" name="username" required>

            <label class="form__label" for="password">Пароль:</label>
            <input class="form__input" type="password" id="password" name="password" required>

            <label class="form__label" for="conf_password">Подтвердите пароль:</label>
            <input class="form__input" type="password" id="conf_password" name="conf_password" required>

            <div class="error">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="error" style="color: red;">{{ $error }}</p>
                    @endforeach
                @endif
            </div>

            <input class="form__submit" type="submit">
        </form>
    </div>
@endsection