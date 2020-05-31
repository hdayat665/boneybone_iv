@extends('layouts.app')
@section('content')

  <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ url('assets/img/hero/about.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-cap text-center">
              <h2>Edit Biodata</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container">

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('biodata.update',$biodata->id)}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      {{ method_field('PUT') }}
      
      <div class="row">
        <div class="col-md-12">
          <strong>Nama :</strong>
          <input type="text" name="name" class="form-control" value="{{$biodata->name}}">
        </div>
        <div class="col-md-12">
          <strong>Alamat :</strong>
          <input type="text" name="email" class="form-control" value="{{$biodata->email}}">
        </div>
        <br>
        <br>
        <br>
        <div class="col-md-12">
          <a href="{{route('biodata.index')}}" class="genric-btn success circle">Back</a>
          <button type="submit" class="genric-btn primary circle">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection