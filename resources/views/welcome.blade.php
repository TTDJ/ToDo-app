@extends('layout')
@section('content')
    <div class="title m-b-md">
        Buenos días {{ $name }}!
    </div>
    <hr>
        <h2>What should I do today?</h2>
    <hr>
    <div class="links">
        <a href="/tasks/">Summary</a>
        <a href="/tasks/1">What's next?</a>
    </div>
@endsection
