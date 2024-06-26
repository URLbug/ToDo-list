<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    function index(): View
    {
        $tasks = Task::query()
        ->join('users', 'users.id', '=', 'tasks.usersId')
        ->where('users.id', Auth::user()->id)
        ->orderByDesc('tasks.id')
        ->get([
            'name',
            'tasks.id',
        ]);

        return view(
            'index',
            [
                'tasks' => $tasks,
            ]
        );
    }

    function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'string|required|max:255',
        ]);

        $isTask = Task::create([
            'usersId' => Auth::user()->id,
            'name'=> $data['name'],
        ]);

        if(!$isTask)
        {
            return back()->withErrors('Не удалось добавить задачу!');
        }

        return back()->with('success', 'Вы успешно добавили задачу!');
    }

    function delete(mixed $id): RedirectResponse
    {
        $id = (int)$id;
        
        $isTask = Task::query()
        ->join('users', 'users.id', '=', 'tasks.usersId')
        ->where('users.id', Auth::user()->id)
        ->where('tasks.id', $id)
        ->limit(1)
        ->delete();

        if(!$isTask)
        {
            return back()->withErrors('Не удалось удалить задачу!');
        }

        return back()->with('success', 'Вы успешно удалили задачу!');
    }
}
