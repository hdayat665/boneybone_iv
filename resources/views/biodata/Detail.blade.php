@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Application</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Company Name : </strong> 
                @if ($biodata->company == 1) 
                  {{'lalamove'}} 
               @elseif ($biodata->company == 2) 
                  {{'Grab'}} 
                @endif
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Position : </strong> 
              @if ($biodata->position == 1) 
                {{'Administrative Assistant'}} 
              @elseif ($biodata->postion == 2) 
                {{'Branch Management'}} 
              @else 
                {{'District Manager'}} 
              @endif
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Status : </strong>

             @if ($biodata->status == 1) 
              {{'Approve'}} 
            @elseif ($biodata->status == 2) 
              {{'Rejected'}} 
            @else 
              {{'Pending'}} 
            @endif
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection