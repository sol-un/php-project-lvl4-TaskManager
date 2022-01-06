@extends('layouts.app')

@section('content')
<h1 class="mb-5">{{__('task.tasks')}}</h1>
@auth
<a href="{{ route('tasks.create') }}" class="btn btn-primary">
    {{__('task.create')}}
</a>
@endauth
<table class="table mt-2">
    <thead>
        <tr>
            <th>{{__('task.id')}}</th>
            <th>{{__('task.taskStatus')}}</th>
            <th>{{__('task.name')}}</th>
            <th>{{__('task.creator')}}</th>
            <th>{{__('task.owner')}}</th>
            <th>{{__('task.created_at')}}</th>
            @auth
            <th>{{__('task.actions')}}</th>
            @endauth
        </tr>
    </thead>
    @foreach($tasks as $task)
    <tr>
        <td>{{ $task->id }}</td>
        <td>{{ $task->taskStatus->name }}</td>
        <td>{{ $task->name }}</td>
        <td>{{ $task->creator->name }}</td>
        <td>{{ optional($task->owner)->name }}</td>
        <td>{{ $task->created_at }}</td>
        @auth
        <td>
            <a class="text-danger text-decoration-none" href="{{ route('tasks.destroy', $task) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">
                {{__('task.delete')}}
            </a>
            <a class="text-decoration-none" href="{{ route('tasks.edit', $task) }}">
                {{__('task.edit')}}
            </a>
        </td>
        @endauth
    </tr>
    @endforeach
</table>
@endsection