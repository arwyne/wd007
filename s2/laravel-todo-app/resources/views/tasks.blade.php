@extends('layouts.template')

@section('titlecontent')
 Laravel Todo App
@endsection

@section('bodycontent')

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <h3>Create Task</h3>
                <form action="/tasks/add" method="POST">
                    @csrf

                    {{-- CSRF_TOKEN, it protect the formdata that we are passing to the controller --}}
                    {{-- CSRF - Cross Site Request Forgery --}}
                    <div class="form-group">
                        <label>TASK:</label>
                        <input type="text" name="task_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>TIME:</label>
                        <input type="text" name="task_time" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Tasks list --}}
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <h3>Task for Today</h3>
            <ul class="list-group">
                {{-- @dd($tasks) --}}
                @foreach ($tasks as $task)
                {{-- if the authenticated user id matched the task user id, the tasks will display --}}
                    @if(Auth::user()->id == $task->user_id)
                
                        {{-- @dd($task) --}}
                        <li class="list-group-item d-flex justify-content-md-between align-items-center">
                            @if($task->status == 1)

                                <del>
                                    <span class="d-flex ">
                                        <span style="min-width: 250px">
                                            <strong>Task: </strong> {{$task->task_name}}
                                        </span>
                                        <span>
                                            <strong>Time: </strong> {{$task->task_time->isoFormat('MMMM Do YYYY, h:mm:ss a')}}
                                        </span>
                                    </span>
                                </del>

                                <span class="d-flex">                             
                                    <form class="mx-2" action="/tasks/update/{{$task->id}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-warning">
                                            <i class="far fa-square"></i>
                                        </button>
                                    </form>

                            @else

                                <span class="d-flex ">
                                    <span style="min-width: 250px">
                                        <strong>Task: </strong> {{$task->task_name}}
                                    </span>
                                    <span>
                                        <strong>Time: </strong> {{$task->task_time->isoFormat('MMMM Do YYYY, h:mm:ss a')}}
                                    </span>
                                </span>

                                <span class="d-flex">
                                    <form class="mx-2" action="/tasks/update/{{$task->id}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success">
                                            <i class="fas fa-check-square"></i>
                                        </button>
                                    </form>
                                
                            @endif

                                <form class="mx-2" action="/tasks/delete/{{$task->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    {{-- method spoofing, tricks the html method by adding a method delete, or method put/patch --}}
                                    {{-- delete button --}}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-minus-circle"></i>
                                    </button>
                                </form>
                            </span>
                        </li>

                    @endif

                @endforeach
            </ul>
        </div>
    </div>

@endsection