@extends('master')
@section('content')
<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Update task</h6>
                    <p class="text-muted mb-3">Welcome to ask Update Page</p>
                    <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <li><a href="{{ route('tasks')}}"  class="btn btn-primary text-right"><i class="fa fa-sign-out"></i><<  Back</a></li>
                    </ul>
                    @if (\Session::has('success'))
                  <div class="alert-success alert-dismissible fade show" role="alert">
                  </div>
                    {{ \Session::get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
                  </div>
                  @endif
                       <form class="forms-sample" action="{{ route('updatetask') }}" method="post">
                        @csrf
                        <input type="hidden" value="{{$task->id}}" name="taskid">
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Task Name</label>
                                <input type="text" class="form-control mb-4 mb-md-0"  value="{{$task->taskname}}" name="taskname">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Priority</label>
                                <input type="text" class="form-control"  value= "{{$task->priority}}" name="priority">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

