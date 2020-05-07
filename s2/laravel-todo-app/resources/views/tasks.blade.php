<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Todo App</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- fontawesome icons -->
    <script src="https://kit.fontawesome.com/763fd16ca4.js" crossorigin="anonymous"></script>

</head>
<body>

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
                    {{-- @dd($task) --}}
                    <li class="list-group-item d-flex justify-content-md-between align-items-center">
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

                @endforeach
            </ul>
        </div>
    </div>
    

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>