@extends('layout.master')
@section('content')
    <div class="container">
        <h1>To-do-list</h1>
        <hr>
        <form action="{{ route('actiontambah') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="newtask" class="form-label">Add new task : </label>
                <input type="text" name="task" class="form-control" id="newtask" aria-describedby="texts">
                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>            
        </form>
        <ul class="list-group list-group-numbered">
            @foreach ($todolist as $todo)
                <li class="list-group-item">{{ $todo->task }}|{{ $todo->user }}</li>
            @endforeach
        </ul>
        <hr>
        {{ $todolist->links() }}
    </div>
@endsection