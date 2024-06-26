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
       @yield('content')
    </main>
</body>
</html>