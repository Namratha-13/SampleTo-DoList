<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        try {
            Task::create($validated + ['is_completed' => false]);
            return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Error creating task!');
        }
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'sometimes|boolean',
        ]);

        try {
            $task->update($validated);
            return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Error updating task!');
        }
    }

    public function destroy(Task $task)
    {
        try {
            $task->delete();
            return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Error deleting task!');
        }
    }
}