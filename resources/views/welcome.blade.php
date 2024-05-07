@extends('layouts.main')
@push('head')
<title>Todo list App</title>
@endpush
@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <div class="h2">All Todos</div>
        <a href="/create" class="btn btn-primary btn-lg">Add Todo</a>
    </div>
    <table class="table table-stripped">
        <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>
        <tr>
            @foreach($todos as $todo)
            <td>{{$todo->name}}</td>
            <td>{{$todo->work}}</td>
            <td>{{$todo->duedate}}</td>
            <td>
                <a href="{{route('todo.delete', $todo->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('todo.edit', $todo->id)}}" class="btn btn-success">Update</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection