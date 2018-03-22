@extends('layouts.task-manager')

@section('content')

    <header>
        <div class="logout"><a href="/auth/logout">Sign Out</a></div>
        <div class="title">Welcome, {{ Auth::user()->name }}</div>
    </header>

    <div class="container">
    <div class="card">
        <div class="card-header">
            Add Task
        </div>
        <div class="card-body">

            <!-- New Task Form -->
            <form action="/task" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                <div class="form-group">
                    <label for="task-title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-6">
                        <input type="text" name="title" id="task-title" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="task-name" class="col-sm-3 control-label">Description</label>

                    <div class="col-sm-6">
                        <input type="text" name="description" id="task-description" class="form-control">
                    </div>
                </div>

                <!-- Add Task Button -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Add 
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Current Tasks
        </div>
        <div class="card-body">
            <div class="list-group">
                @if (count($tasks) == 0)
                    <div class="list-group-item">Please add a new task</div>
                @endif
                @foreach ($tasks as $task)
                    <div class="list-group-item flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><a href="#">{{ $task->title }}</a></h5>
                            <button type="button" class="btn btn-link btn-remove"><i class="fa fa-trash-alt"></i></button>
                        </div>
                        <p class="mb-1">{{ $task->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

@endsection