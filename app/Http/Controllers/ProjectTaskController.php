<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project_Model;
use App\Models\Task_Model;
use App\Models\User;

class ProjectTaskController extends Controller {

    public function index() {
        $project = Project_Model::get( [ 'project_models.projectname as projectname',
        'project_models.description as description', 'project_models.id as projectid',
        'project_models.created_at as datecreated', ] );
        return view( 'task.project' )->with( 'tasks', $project );

    }
    // end

    // The function that savesProject

    public function saveproject( Request $request ) {

        Project_Model::create( [
            'projectname'=>$request->projectname,
            'description'=>$request->description,
        ] );

        return back() ->with( 'success', 'You have succefully Created a Project' );
    }
    // end

    // The function that views task

    public function viewproject() {
        $task = Task_Model::leftjoin( 'project_models', 'project_models.id', '=', 'task_models.project_id' )
        ->get( [ 'project_models.id as id', 'task_models.taskname as taskname',
        'project_models.projectname as project', 'task_models.id as taskid', 'task_models.created_at as datecreated' ] );
        return view( 'task.viewproject' )->with( 'tasks', $task );
    }
    //end
}
