@extends('layout')
@section('content')
    <h1 class="title">Buenos días niño!</h1>
    <h2 class="subtitle">What should I do today?</h2>
    <hr>
    <div class="field is-grouped">
        <div class="control">
            <a class="button" href="/tasks/">Summary</a>
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
