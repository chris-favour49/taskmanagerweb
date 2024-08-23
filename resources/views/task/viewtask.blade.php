
@extends('master')
@section('content')

<div class="page-content">
    @foreach ($tasks as $a )


    @endforeach
    <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
        <li><a href="{{ route('alltasks') }}"  class="btn btn-primary number-right"><i class="fa fa-sign-out"></i><<  Back</a></li>
    </ul>
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <div class="alert alert-fill-primary" role="alert">
            <h3 class="btn btn-primary"> TASK FOR {{$a->taskname}}</h3>
            </div>
        </ol>
    </nav>
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

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
<div class="card">
  <div class="card-body">

                    <h6 class="card-title">Task View</h6>
                    <form class="forms-sample" action="#" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                            <div class="row mb-3">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Task Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="taskname" value="{{ $a->taskname}}"  id="taskname" readonly>
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Priority</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="thigh" value="{{ $a->priority}}"  id="prirority" readonly>
                                </div>
                            </div>

                    </form>

  </div>
</div>
</div>
    </div>

 @endsection

