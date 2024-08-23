<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task_Model;
use App\Models\User;

class TaskManagerController extends Controller {

    // The function that captures all the informations on task

    public function index() {
        $task = User::leftjoin( 'task_models', 'task_models.user_id', '=', 'users.id' )
        ->get( [ 'users.id as id', 'task_models.taskname as taskname', 'task_models.id as taskid',
        'task_models.priority as priority', 'task_models.created_at as datecreated' ] );
        return view( 'task.taskmanager' )->with( 'tasks', $task );

    }
    // end

    // The function that saves task

    public function savetask( Request $request ) {

        $user = User::create( [
            'name' =>$request->taskname,
            'email' => bcrypt( 'test@email.com' ),
            'password' => bcrypt( 'password123' ),
        ] );

        Task_Model::create( [
            'user_id'=> $user->id,
            'taskname'=>$request->taskname,
            'priority'=>$request->priority,
        ] );

        return back() ->with( 'success', 'You have succefully Created a Task' );
    }
    // end

    // The function that edits task

    public function edittask( $id ) {
        $task  = Task_Model::find( $id );
        return view( 'task.edittask' )->with( 'task', $task );
    }
    // end

    // The function that updates task

    public function updatetask( Request $request ) {
        Task_Model::updateOrCreate( [
            'id'=>$request->taskid,
        ] ,
        [
            'taskname'=>$request->taskname,
            'priority'=>$request->priority,
        ] );
        return redirect()->route( 'tasks' )->with( 'success', 'Data updated successfully' );

    }
    //end

    // The function that deletes task

    public function deletetask( $id ) {
        $task  = Task_Model::find( $id )->delete();
        return back() ->with( 'success', 'Data Deleted Successfully' );

    }
    //end

    // The function that captures all  task created

    public function alltasks() {
        $task = User::leftjoin( 'task_models', 'task_models.user_id', '=', 'users.id' )
        ->get( [ 'users.id as id', 'task_models.taskname as taskname', 'task_models.id as taskid',
        'task_models.priority as priority', 'task_models.created_at as datecreated' ] );
        return view( 'task.alltasks' )->with( 'tasks', $task );

    }
    // end

    // The function that views task

    public function viewtasks( $id ) {
        $task = Task_Model::where( 'task_models.id', $id )
        ->leftJoin( 'users', 'users.id', '=', 'task_models.user_id' )
        ->where( 'task_models.user_id', $id )
        ->get( [ 'users.name as name', 'task_models.taskname as taskname',
        'task_models.id as taskid', 'task_models.priority as priority', ] );

        return view( 'task.viewtask' )->with( 'tasks', $task )
        ->with( 'id', $id );

    }
    //end
}

