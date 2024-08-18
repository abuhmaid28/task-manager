<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'due_date' => 'required|date',
            'status' => 'nullable|boolean',
        ]);

        $status = $request->has('status') ? true : false;

        Task::create(array_merge($request->all(), ['status' => $status]));

        return redirect()->route('tasks.index');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'due_date' => 'required|date',
            'status' => 'nullable|boolean',
        ]);

        $status = $request->has('status') ? true : false;

        $task->update(array_merge($request->all(), ['status' => $status]));

        return redirect()->route('tasks.index');
    }
    public function toggleStatus(Task $task)
    {
        $task->status = !$task->status; // Toggle the status
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task status updated successfully.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
