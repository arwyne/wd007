<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    function viewTaskPage(){
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    function addTask(Request $request){
        $newTask = new Task();
        $newTask->task_name = $request->task_name;
        $newTask->task_time = $request->task_time;
        $newTask->priority_id = 1;
        $newTask->user_id = 1;
        // dd($newTask);
        $newTask->save();

        return redirect('/tasks');
    }

    function deleteTask($taskid){
        $deleteTask = Task::find($taskid);
        $deleteTask->delete();
        return redirect('/tasks');
    }
    
    function updateTask($taskid){
        $updateTask = Task::find($taskid);
        $updateTask->status = 1;
        $updateTask->save();
        return redirect('/tasks');
    }
}
