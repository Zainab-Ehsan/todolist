<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = Task::latest()->get();

        return view('tasks', [
            'title' => 'Tasks - TaskFlow',
            'tasks' => $tasks,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:2000'],
        ]);

        Task::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'is_completed' => false,
        ]);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task added successfully!');
    }

    public function toggle(Task $task): RedirectResponse
    {
        $task->update([
            'is_completed' => ! $task->is_completed,
        ]);

        return redirect()->route('tasks.index')
            ->with('success', 'Task status updated.');
    }

    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully.');
    }
}
