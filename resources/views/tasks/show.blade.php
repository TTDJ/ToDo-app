@extends('layout')
@section('content')
    <h1 class="title">¡ Vamos compańero !</h1>
    <h2 class="subtitle">We are in a hurry! So...</h2>
    <div>
        <h3>{{ $task->title }}</h3>
        <div class="is-size-7 has-text-grey-light">
            {{ $task->created_at->toFormattedDateString() }}
        </div>
        <p>
            {{ $task->body }}
        </p>

        @if (count($task->steps))
        <div>
            <hr>
            <ul>
                @foreach ($task->steps as $step)
                    <li>
                        {{ $step->body }}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif

    </div>

    <hr>

    <form method="POST" action="/tasks/task/{{ $task->id }}/step">
        {{csrf_field() }}
        <div class="field has-addons">
          <div class="control">
            <input name="body" class="input" type="text" placeholder="One step at a time..." required="" autofocus="">
          </div>
          <div class="control">
            <button type="submit" class="button is-info">
              Add new step
            </button>
          </div>
        </div>
        @include ('layouts.errors')
    </form>

    <hr>

    <div class="field is-grouped">
        <div class="control">
            <a class="button" href="/">Home</a>
        </div>
        <div class="control">
            <a class="button" href="/tasks/">What else?</a>
        </div>
        <div class="control">
            <a class="button" href="/tasks/create">Add new task</a>
        </div>
    </div>
    <hr>
@endsection
