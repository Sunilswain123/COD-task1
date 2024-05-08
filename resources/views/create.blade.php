@extends('layouts.main')
@push('head')
<title>Add Todo</title>
@endpush
@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <div class="h2">Create/Add Todo</div>
        <a href="/" class="btn btn-primary btn-lg">Back</a>
    </div>
    <div class="card my-1">
        <div class="card-body">
            <form action="{{route('todo.store')}}" method="post">
                @csrf
                <label for="" class="form-label mt-4">Name</label>
                <input type="text" name="name" class="form-control">
                <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                 </div>
                <label for="" class="form-label mt-4">Work</label>
                <input type="text" name="work" class="form-control">
                <div class="text-danger">
                    @error('work')
                    {{$message}}
                    @enderror
                 </div>
                <label for="" class="form-label mt-4">Due Date</label>
                <input type="date" name="duedate" class="form-control">
                <div class="text-danger">
                    @error('duedate')
                    {{$message}}
                    @enderror
                 </div>
                <button class="btn btn-primary btn-lg mt-2">Add Todo</button>
            </form>
        </div>
    </div>
    
</div>

@endsection