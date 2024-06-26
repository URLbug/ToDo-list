@extends('app')

@section('content')
    <section class="todo-list">
        <h2>Задачи</h2>
        <p class="username">Ваш логин: {{ Auth::user()->login }}</p>
        <a href="{{ route('logout') }}" class="logout">Выйти</a>

        <form class="add-task-form" method="POST" action={{ route('home') }}>
            @csrf

            <input type="text" id="new-task" name="name" placeholder="Добавить новую задачу">

            <div class="error">
                @if($errors->any())
                    <p style="color: red;">{{ $errors->first() }}</p>
                @endif
            </div>

            <div class="success">
                @if (session('success'))
                    <p style="color: green;">
                        {{ session('success') }}
                    </p>
                @endif
            </div>
            
            <button class="add-task-btn">Добавить</button>
        </form>

        <ul class="task-list">
            @foreach ($tasks as $task)
                <li>{{ $task->name }} <a href="/delete/{{ $task->id }}" class="task-list-btn"><i class="fa-solid fa-trash-can"></i></a></li>
            @endforeach
        </ul>
        
    </section>
@endsection