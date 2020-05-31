@extends('layouts.app')
@section('content')

    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Get your job</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <!-- Right content -->
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            <span>10,000 Jobs found</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Count of Job list End -->

                                <!-- single-job-content -->
                                 @foreach ($biodatas as $biodata)
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="#"><img src="{{$biodata->com_logo}}" alt="" height="100px"></a>
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                                <h4>{{$biodata->job_name}}</h4>
                                            <ul>
                                                <li> {{$biodata->com_name}}</li>
                                                <li><i class="fas fa-map-marker-alt"></i>{{$biodata->place}}, Malaysia</li>
                                                <li>${{$biodata->salary}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="{{url('create')}}/{{$biodata->id}}">Apply</a>
                                        <span>7 hours ago</span>
                                    </div>
                                </div>
                                @endforeach
                                <!-- single-job-content -->
                              
                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->
        <!--Pagination Start  -->
       
        <!--Pagination End  -->
        
    </main>
   
        
@endsection