<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Task Manager')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-background font-sans leading-normal tracking-normal">
    <div class="min-h-screen flex flex-col">
        <nav class="bg-primary text-white p-4 shadow">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('tasks.index') }}" class="text-lg font-semibold">Task Manager</a>
                <a href="{{ route('tasks.create') }}" class="text-white py-2 px-4 rounded">Add
                    Task</a>
            </div>
        </nav>
        <main class="container mx-auto py-8 flex-grow">
            @yield('content')
        </main>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
