<?php

namespace App\Http\Controllers;

use App\Task;

class StepController extends Controller
{
    public function store(Task $task)
    {

        $this->validate(request(), [
            'body' => 'required|min:2',
        ]);
        $task->addStep(request('body'));

        session()->flash('message', 'Nice! New step has been added to "'.$task->title.'" task!');

        return back();
    }
}
