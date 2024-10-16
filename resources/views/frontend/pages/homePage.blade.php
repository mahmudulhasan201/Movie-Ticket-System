 @extends('frontend.master')
 @section('content')

 <!-- start slider-->
 <div class="containers">
     <div class="row">
         <div class="col-12">
             <div class="leftbottomcontent">
                 <div class="now_showing_home">
                     <p><a href=""> Now Showing </a></p>
                 </div>
                 <section id="dg-container" class="dg-container">
                     <div class="dg-wrapper">
                         @foreach($movies as $data)
                         <a class="" href="{{route('frontend.movie.details', $data->id)}}">
                             <img style="display: block;" src="{{url('images/movies/', $data->image)}}" class="lazy" data-original="" alt="Shoroter Joba" height="195px" width="373px">
                         </a>
                         @endforeach
                     </div>
                     <nav> <span class="dg-prev"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                 <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                             </svg></span> <span class="dg-next"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                 <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                             </svg></span> \
                     </nav>
                 </section>
             </div>
         </div>
     </div>
 </div>
 <!-- end slider-->

 <div class="container">
     <div class="row">
         <h2><a href=""></a></h2>
         <div class="row">
             @foreach($movies->take(4) as $data)
             <div class="col-lg-6 col-md-12 col-sm-6">
                 <section class="box_cat_wp">
                     <div class="box_cat cat-hover">
                         <a class="cat-overlay" href="{{ route('frontend.movie.details', $data->id) }}" style="display: inline; left: 0px; bottom: -202px;">
                             <h2>Watch Details</h2>
                             <p class="text_align_style_center" style="margin-bottom:0;">
                                 {{ $data->title }}
                             </p>
                         </a>
                         <div class="cat-img" style="display: block;">
                             <img class="" alt="{{ $data->title }}" src="{{ url('images/movies/', $data->image) }}">
                         </div>
                     </div>
                 </section>
             </div>
             @endforeach
         </div>
     </div>
     <!-- End row -->
 </div>
 <!-- End container -->
 @endsection