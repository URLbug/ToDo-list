@extends('app')

@section('content')
    <section class="todo-list">
        <h2>Tasks</h2>
        <form class="add-task-form">
            <input type="text" id="new-task" placeholder="Add new task">
            <button class="add-task-btn">Добавить</button>
        </form>

        <ul class="task-list">
            <!-- tasks will be rendered here -->
            <li>task 1 <a href="#" class="task-list-btn"><i class="fa-solid fa-trash-can"></i></a></li>
        </ul>
        
    </section>
@endsection