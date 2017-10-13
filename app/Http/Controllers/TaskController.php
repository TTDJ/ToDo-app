<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    public function home()
    {
        $name = 'niño';
        return view('welcome', compact('name'));
    }
    public function index()
    {
        $name = 'chico';
        $tasks = Task::all(); //::incomplete()->get() -----  for incomplete tasks
        return view('tasks/index', compact('name', 'tasks'));
    }
    public function show(Task $task)
    {
        $name = 'compańero';
        return view('tasks/show', compact('name', 'task'));
    }
}
