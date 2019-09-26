@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">{{ $project->description }}
        <p>
            <a href="/projects/{{ $project->id }}/edit">Edit Project</a>
        </p>
    </div>

    {{-- Prevent creating an empty div --}}
    @if($project->tasks->count())
        <div class="box">
            @foreach($project->tasks as $task)
                <div>
                    <form method="post" action="/tasks/{{ $task->id }}">
                        @method('patch')
                        @csrf

                        <label for="completed" class="checkbox {{ $task->completed ? 'is-completed' : '' }}">
                            <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    <form method="post" action="/projects/{{ $project->id }}/tasks" class="box">
        @csrf

        <div class="field">
            <label for="description" class="label">New Task</label>

            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>

        @include('errors')
    </form>

@endsection
