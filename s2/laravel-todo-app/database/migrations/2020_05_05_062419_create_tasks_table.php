<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->dateTime('task_time');
            $table->unsignedBigInteger('priority_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            /*Foreign key constraint*/
            $table->foreign('priority_id')->references('id')->on('priorities');
            /*This means that the priority_id column is a foreign key in which its reference is the id column on the priorities table*/

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
