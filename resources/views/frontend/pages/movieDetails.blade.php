@extends('frontend.master')
@section('content')
<div id="boxed">
    <div class="bg_gray">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-5 grid_bottom_margin" style="border: 1px solid #0f75bc;">
                    <h3 class="text-center"> {{$movies->movie_name}} </h3>
                    <div class="text-center">
                        <a href="">
                            <img src="{{url('images/movies', $movies->image)}}" alt="The Bagman" width="310px" height="450px;" class="">
                        </a>
                    </div>
                    <h4 style="margin-bottom:0;" class="uppercase_style text_align_style_center">DIRECTOR</h4>
                    <p style="margin-bottom:0; font-size:15px;" class="text_align_style_center">
                    {{$movies->director}} 
                    </p>
                    <h4 style="margin-bottom:0;" class="uppercase_style text_align_style_center">CAST</h4>
                    <p style="margin-bottom:0; font-size:15px;" class="text_align_style_center">
                    {{$movies->cast}} 
                    </p>
                    <h4 style="margin-bottom:0;" class="uppercase_style text_align_style_center">RUNTIME</h4>
                    <p style="margin-bottom:0; font-size:15px;" class="text_align_style_center">
                    {{$movies->run_time}} 
                    </p>
                    <h4 style="margin-bottom:0;" class="uppercase_style text_align_style_center">RELEASE DATE</h4>
                    <p style="margin-bottom:0; font-size:15px;" class="text_align_style_center">
                    {{$movies->release_date}} 
                    </p>
                </div>
                <div class="col-md-7 col-sm-7">
                    <br /><br />
                    <!-- End of Amazing Slider Code -->
                    <div class="row" style="border-top:1px solid #f2f2f2; margin-top:0px; padding-left:10px;">
                        <h4>Description</h4>


                        <p>{{$movies->description}}</p>


                    </div>
                    <div class="row" style="border-top:1px solid #f2f2f2; margin-top:0px; padding-left:10px;">


                        <div class="text-center">
                            <img src="{{url('images/movies', $movies->image)}}" width="80%">
                        </div>



                    </div>


                    <!-- End row-->

                </div>
                <div class="col-md-12" style="padding-top:30px;">
                    <p class="text-center">
                        <a href="{{route('frontend.booking.form', $movies->id)}}">
                            <img class="lazy common-loader" height="200px" src="https://blockbusterbd.com/assets/web/img/Buy-Tickets-Now1.png" alt="" class="w-100">
                        </a>
                    </p>
                
                </div>
                <br />
            </div>
        </div>
        <!-- End container -->
    </div>


    @endsection