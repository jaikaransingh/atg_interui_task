@extends('layouts.app')

@section('content')
<div class="container">
    <form action ="#" method="post" id="tasksUpdate">
        @csrf 
        <div class="form-group">
            <input type="text" name="task_id" id="taskid" value="{{ $id }}" style="display: none">
            <label for="text">Status</label>
            <select name="status" id="upds" class="form-control" value="pending">
                <option value="pending">Pending</option>
                <option value="Done">DONE</option>
            </select>
        </div>
    </form>
    <button class="btn btn-primary" id="taskU" style="margin-top: 1%">SUBMIT</button>
</div>
@endsection   
    
