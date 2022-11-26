@extends('layout.master')
@section('content')
    <div class="container">
        <h1>To-do-list</h1>
        <hr>
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="newtask" class="form-label">Add new task : </label>
                <input type="text" name="task" class="form-control" id="newtask" aria-describedby="texts">
                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>            
        </form>
        <ul class="list-group list-group-numbered">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
        </ul>
    </div>
@endsection