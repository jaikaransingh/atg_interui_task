@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-success" id="successMessage" role="alert">
            </div>
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" id="successMessage" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                        
                    <h3>Hello {{ Auth::user()->name }}</h3>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding: 2%">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tasks <a href="/addtask" class="btn btn-success">Add Task</a>
                </div>
                <div class="card-body">
                    <table id="task" class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Task</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($tasks)
                            @foreach ($tasks as $t)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $t->task }}</td>
                                <td>{{ $t->status }}</td>
                                <td><a href="/update/{{$t->id}}" class="btn btn-success">Update Status</a></td>
                            </tr>
                            @endforeach
                            @else
                                <h5> No! Task Created </h5>
                            @endif
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection