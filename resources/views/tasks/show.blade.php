@extends('layout')
@section('content')
    <div class="title m-b-md">
        ¡ Vamos {{ $name }} !
    </div>
    <hr>
    <div>
        <h2>We are in a hurry! So...</h2>
            <h3>{{ $task->body }}</h3>
        </ul>
    </div>
    <hr>
    <div class="links">
        <a href="/">Home</a>
        <a href="/tasks/">What else?</a>
    </div>
@endsection
