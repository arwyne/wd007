<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // We have to register our timestamp which is "task_time", in order for us to implement the Carbon (human readable time conversion)
    protected $dates = ['task_time'];
}
