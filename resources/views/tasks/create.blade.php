@extends('layout')
@section('content')
	<h1 class="title">Create a task</h1>
	<h2 class="subtitle ">What should I do soon?</h2>
	<h3>{{ app()->getLocale() }}</h3>
    <hr>
    	<form method="POST" action="/tasks">
    		{{csrf_field() }}
    		<div class="field">
	        	<label class="label" for="title">@lang('label.task-title', ['name'=>'Jani'])</label>
	        	<div class="control has-icons-left">
	        		<input class="input" type="text" id="title" name="title" placeholder="Title of the task" autofocus="">
	        		<span class="icon is-small is-left">
						<i class="fa fa-tasks"></i>
					</span>
	        	</div>
	    	</div>

	    	<div class="field">
				<label class="label" for="body">Description:</label>
				<div class="control">
					<textarea class="textarea" id="body" name="body" placeholder="Any specific details?"></textarea>
				</div>
			</div>

			@include ('layouts.errors')

			<hr>

			<div class="field is-grouped">
				<div class="control">
					<button class="button is-link" type="submit">Remind me!</button>
				</div>
				<div class="control">
					<a class="button" href="/">Cancel</a>
				</div>
			</div>

			<hr>

      </form>


@endsection
