@extends('frontend.master')
@section('content')


<div class="tab-content">
    <div id="all" class="tab-pane active">
        <div class="row showing-v2">
            @foreach($movies as $movie)
            <div class="col-md-3 col-sm-4 grid_bottom_margin">
                <h5 class="text_align_style_center">
                    {{$movie->movie_name}}
                </h5>
                <div class="border_style_for_image">
                    <a href="{{route('frontend.movie.details', $movie->id)}}">
                        <img class="lazy" alt="" src="{{url('images/movies', $movie->image)}}" width="213px" height="309px;">
                    </a>
                </div>
                <h6 class="uppercase_style text_align_style_center" style="margin-bottom:0;">CAST</h6>
                <p class="text_align_style_center" style="margin-bottom:0;height: 41px;overflow: hidden;">
                    {{$movie->cast}}
                </p>
                <p class="text_align_style_center" style="margin-bottom:0;height: 35px;overflow: hidden;">
                    <a class="btn_1" href="{{route('frontend.movie.details', $movie->id)}}">More</a>
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection