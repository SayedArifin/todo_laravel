@extends('layouts.app')
@section('title')
    <h1>List of task</h1>
@endsection
@section('content')
    <div>
        <div class="mb-5">
            <a class="link" href="{{ route('task.create') }}">Create new Task</a>
        </div>

        @if (count($tasks))
            @foreach ($tasks as $task)
                <li><a href="{{ route('task.detail', ['task' => $task->id]) }}"
                        @class(['line-through' => $task->completed])>{{ $task->title }}</a></li>
            @endforeach
        @else
            <p>i got nothing</p>
        @endif
    </div>
    @if ($task->count() > 10)
        <div class="mt-4">{{ $tasks->links() }}</div>
    @endif
@endsection
