<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    public function home()
    {
        return view('tasks/welcome');
    }
    public function index()
    {
        $tasks = Task::all(); //::incomplete()->get() -----  for incomplete tasks
        return view('tasks/index', compact('tasks'));
    }
    public function show(Task $task)
    {
        return view('tasks/show', compact('task'));
    }
    public function create()
    {
        return view('tasks/create');
    }
    public function store()
    {

        $this->validate(request(), [
            'title' => 'required',
        ]);

        // $task = new Task;

        // $task->title = request('title');
        // $task->body = request('body');
        // $task->save();

        // Task::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        // ]);

        $task = Task::create(request(['title', 'body']));

        // return redirect('tasks/task/'.$task->id);
        return redirect(route('tasks.show', ['task' => $task->id]));
    }
}
