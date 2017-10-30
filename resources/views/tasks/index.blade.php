@extends('layout')
@section('content')
    <h1 class="title">
        ¡ Hola chico !
    </h1>
    <h2 class="subtitle">Be prepared! These tasks are waiting for you!</h2>
    <div>
        <ul style="display: inline-block; text-align: left;">
            @foreach ($tasks as $task)
                <li><a href="/tasks/task/{{ $task->id }}">{{ $task->title }}</a></li>
            @endforeach
        </ul>
    </div>
    <hr>
    <div class="field is-grouped">
        <div class="control">
            <a class="button" href="/">Home</a>
        </div>
        <div class="control">
            <a class="button" href="/tasks/task/1">What's next?</a>
        </div>
        <div class="control">
            <a class="button" href="/tasks/create">Add new task</a>
        </div>
    </div>
    <hr>
@endsection
