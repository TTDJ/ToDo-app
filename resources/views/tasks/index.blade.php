@extends('layout')
@section('content')
    <div class="title m-b-md">
        ¡ Hola {{ $name }} !
    </div>
    <hr>
    <div>
        <h2>Be prepared! These tasks are waiting for you!</h2>
        <ul style="display: inline-block; text-align: left;">
            @foreach ($tasks as $task)
                <li><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></li>
            @endforeach
        </ul>
    </div>
    <hr>
    <div class="links">
        <a href="/">Home</a>
        <a href="/tasks/1">What's next?</a>
    </div>
@endsection
