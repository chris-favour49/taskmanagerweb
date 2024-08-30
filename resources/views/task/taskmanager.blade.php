<!DOCTYPE html>
<html lang =eng>
<title> Task Management</title>
</html>
@extends('master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        @if (\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congrats! </strong>{{ \Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
        </div>
    @endif
    @if (\Session::has('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>OOPS! </strong>{{ \Session::get('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
    </div>
@endif

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">task Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Task Manager</a></li>
                            <li class="breadcrumb-item active">task-List</li>
                        </ol>
                        <div class="page-title-right">
                            <a href="{{route('dashboard')}}" class="btn btn-sm btn-primary edit-item-btn"><< Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Add, Edit & Remove</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Create Task</button>

                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">

                                            <th class="sort" data-sort="email">SN</th>
                                            <th class="sort" data-sort="customer_name">Task Name</th>
                                            <th class="sort" data-sort="customer_name">Project</th>
                                            <th class="sort" data-sort="customer_name">Assignee</th>
                                            <th class="sort" data-sort="phone">Priority</th>
                                            <th class="sort" data-sort="phone">Status</th>
                                            <th class="sort" data-sort="status">Date Created</th>
                                            <th class="sort" data-sort="customer_name">Due</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                            <tbody>
                                                @php
                                                     $count = 1;
                                                @endphp

                                                @foreach ($tasks as $task)

                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $task->taskname }}</td>
                                                    <td>{{ $task->project }}</td>
                                                    <td>{{ $task->assignee }}</td>
                                                    <td>{{ $task->priority }}</td>
                                                    <td>{{ $task->status }}</td>
                                                    <td>{{ $task->datecreated }}</td>
                                                    <td>{{ $task->due }}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a href="{{route('edittask',$task->taskid)}}" class="btn btn-sm btn-primary edit-item-btn">Edit</a></button>
                                                        </div>
                                                        <div class="edit">
                                                            <a href="{{route('deletetask',$task->taskid)}}" class="btn btn-sm btn-danger edit-item-btn">Delete</a></button>
                                                        </div>
                                                      </td>
                                                    </tr>
                                               </tr>
                                               @php
                                                     $count++;
                                                @endphp

                                                @endforeach
                                            </tbody>
                                          </table>
                                        </div>

                                                </div>
                                            </td>
                                        </tr>

                            </div>


                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <!-- end row -->

        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-`                                                        dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Create Task</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form action="{{ route('savetask')}}" class="tablelist-form" method="Post">
                        @csrf
                        <div class="modal-body">


                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Task Name</label>
                                <input type="text" id="taskname" name="taskname" class="form-control" placeholder="Enter Task Name" required >
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Project</label>
                                <select  name="project" class="form-control">
                                    <option value="">Select a Project</option>
                                    @foreach ($projects as $project)
                                    <option value="{{$project->id }}">{{$project->projectname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Assignee</label>
                                <select  name="assignee" class="form-control">
                                    <option value="">Select an Assignee</option>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id }}">{{$user->username}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Due Time</label>
                                <input type="date" id="due" name="due" class="form-control" placeholder="Enter Task Due" required >
                            </div>

                            <div class="mb-3">
                                <label for="email-field" class="form-label">Status</label>
                                <select id="" name="status" class="form-control">
                                    <option>Please Select Status</option>
                                    <option>Not Started</option>
                                    <option>In Progress</option>
                                    <option>In Complete</option>
                                    <option>Completed</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="email-field" class="form-label">Priority</label>
                                <select id="priority" name="priority" class="form-control">
                                    <option>Please Select Priority</option>
                                    <option>Low</option>
                                    <option>Meduim</option>
                                    <option>High</option>
                                </select>
                            </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn" onclick="form_submit()">Create task</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <i class="bi bi-trash3 display-5 text-danger"></i>
                            <div class="mt-4 pt-2 fs-base mx-4 mx-sm-5">
                                <h4>Are you Sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger " id="delete">Yes, Delete It!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end modal -->

    </div>
    <!-- container-fluid -->
</div>

@endsection
