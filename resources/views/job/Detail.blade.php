@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Job</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Company Name : </strong> 
             {{$job[0]->com_name}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Position : </strong> 
             {{$job[0]->job_name}}
          
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Description : </strong>
             {{$job[0]->job_desc}}

        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('job.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection