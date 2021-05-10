@extends('layouts.app')

@section('content')
<div class="container">
    <form action="#" method="post" id= "taskForm">
        @csrf
        <div class = "form-group">
            <input type="text" name="user_id" id= "user_id" value="{{ Auth::id() }}" style="display:none">
            <label for="text">Task</label>
            <input type="text" class="form-control" name="task" id="taskN" placeholder="Enter your task">
        </div>
        <div>
            <label for="text">Status</label>
            <select name="status" id="taskS" class="form-control" value="pending">
                <option value="pending">Pending</option>
                <option value="done">DONE</option>
            </select>
        </div>
    </form>
    <button class="btn btn-primary" id="taskF" style="margin-top: 1%">SUBMIT</button> 
</div>
@endsection
                