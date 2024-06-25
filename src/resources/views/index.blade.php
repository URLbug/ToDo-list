<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

    @vite([
        'resources/css/app.css',
    ])
</head>
<body>
    <header>
        <h1>Todo List</h1>
    </header>
    <main>
        <section class="todo-list">
            <h2>Tasks</h2>
            <ul id="task-list">
                <!-- tasks will be rendered here -->
            </ul>
            <form id="add-task-form">
                <input type="text" id="new-task" placeholder="Add new task">
                <button id="add-task-btn">Add</button>
            </form>
        </section>
    </main>
</body>
</html>