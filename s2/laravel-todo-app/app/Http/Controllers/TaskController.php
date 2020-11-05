<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;

class TaskController extends Controller
{
    function viewTaskPage(){
        // dd(Auth::user()->id);
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    function addTask(Request $request){
        $newTask = new Task();
        $newTask->task_name = $request->task_name;
        $newTask->task_time = $request->task_time;
        $newTask->priority_id = 1;
        $newTask->user_id = Auth::user()->id;
        // dd($newTask);
        $newTask->save();

        return redirect('/tasks');
    }

    function deleteTask(Task $taskid){
        // $deleteTask = Task::find($taskid);
        // $deleteTask->delete();
        $taskid->delete();
        return redirect('/tasks');
    }
    
    function updateTask($taskid){
        $updateTask = Task::find($taskid);

        // If task status is 0, we'll update it into 1 else we'll update it into 0
        if ($updateTask->status == 0) {
            $updateTask->status = 1;
        } else {
            $updateTask->status = 0;
        }

        // dd($updateTask);
        $updateTask->save();
        return redirect('/tasks');
    }
}
