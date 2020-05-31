@extends('layouts.app')
@section('content')

  <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ url('assets/img/hero/about.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-cap text-center">
              <h2>Job Application</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <a class="genric-btn primary circle" href="{{ route('job.index') }}">Apply Job</a>
        <a class="genric-btn info circle" href="{{route('biodata.edit', Auth::user()->id)}}">Edit Profile</a>

      </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif


    <table class="table table-hover table-sm">
      <tr>
        <th width = "50px"><b>No.</b></th>
        <th width = "300px">Position</th>
        <th>Company</th>
        <th>Status</th>
        <th>Date Apply</th>
        <th width = "300px">Action</th>
      </tr>

      @foreach ($biodatas as $biodata)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>
            {{$biodata->job_name}}
          </td>
          <td>
            {{$biodata->com_name}}
          </td>
          <td>

            @if ($biodata->status == 1) 
              {{'Approve'}} 
            @elseif ($biodata->status == 2) 
              {{'Rejected'}} 
            @else 
              {{'Pending'}} 
            @endif

          </td>
          <td>{{$biodata->created_at}}</td>
          <td>
            <form action="{{ route('biodata.destroy', $biodata->id) }}" method="post">
              <!-- <a class="genric-btn success-border circle" href="{{route('biodata.show',$biodata->id)}}">Show</a> -->
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              {{ method_field('DELETE') }}
              <button type="submit" class="genric-btn danger-border circle">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>


  </div>
@endsection