<!DOCTYPE html>
<html lang =eng>
<title> Project Management</title>
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
                    <h4 class="mb-sm-0">Project Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Project Manager</a></li>
                            <li class="breadcrumb-item active">Project-List</li>
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
                <!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Create Project</button>
                                    </div>
                                </div>
                            </div>
                            <div class="hstack gap-2 justify-content-end" style="float:right; font-size:50px ">
                                <a href="{{route('viewproject')}}" id="add-btn"id="add-btn" class="btn btn-sm btn-success edit-item-btn" style="font-size:15px; ">View Task</a>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">

                                            <th class="sort" data-sort="email">SN</th>
                                            <th class="sort" data-sort="customer_name">Project Name</th>
                                            <th class="sort" data-sort="phone">Description</th>
                                            <th class="sort" data-sort="status">Date Registerd</th>
                                        </tr>
                                    </thead>
                                            <tbody>
                                                @php
                                                     $count = 1;
                                                @endphp

                                                @foreach ($tasks as $project)

                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $project->projectname }}</td>
                                                    <td>{{ $project->description }}</td>
                                                    <td>{{ $project->datecreated }}</td>
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
                        <h5 class="modal-title" id="exampleModalLabel">Create Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form action="{{ route('saveproject')}}" class="tablelist-form" method="Post">
                        @csrf
                        <div class="modal-body">


                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Project</label>
                                <input type="text" id="task" name="projectname" class="form-control" placeholder="Enter Project" required >
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">decsription</label>
                                <textarea id="email-field" class="form-control" name="description" placeholder="The Descripction of the Project"> </textarea>
                            </div>

                            <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn" onclick="form_submit()">Create Project</button>
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
