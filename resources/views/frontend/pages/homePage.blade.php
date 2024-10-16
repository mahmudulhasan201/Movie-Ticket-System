 @extends('frontend.master')
 @section('content')

 <!-- start slider-->
 <div class="containers">
     <div class="row">
         <div class="col-12">
             <div class="leftbottomcontent">
                 <div class="now_showing_home">
                     <p><a href="https://blockbusterbd.com/now-showing"> Now Showing </a></p>
                    </div>
                    <section id="dg-container" class="dg-container">
                        <div class="dg-wrapper">
                         @foreach($movies as $data)
                         <a class="" href="{{route('frontend.movie.details', $data->id)}}">
                             <img style="display: block;" src="{{url('images/movies/', $data->image)}}" class="lazy" data-original="https://blockbusterbd.com//uploads/movies/posters/shoroter-joba-17190692561728569625.jpg" alt="Shoroter Joba" height="195px" width="373px">
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
         <div class="col-md-4" id="strip_activities">
             <h2><a href="https://blockbusterbd.com/next-arrival">Next Arrivals</a></h2>
             <div class="row">
             @foreach($movies as $data)
                 <div class="col-lg-6 col-md-12 col-sm-6">
                     <section class="box_cat_wp">
                         <div class="box_cat cat-hover">
                             <a class="cat-overlay" href="https://blockbusterbd.com/movie-details/00626/the-bagman" style="display: inline; left: 0px; bottom: -202px;">
                                 <h2>Watch Trailer</h2>
                                 <p class="text_align_style_center" style="margin-bottom:0;">
                                     The Bagman
                                 </p>
                             </a>
                             <div class="cat-img" style="display: block;">
                                 <img class="" alt="" src="{{url('images/movies/', $data->image)}}">
                                 <h2>Watch Trailer</h2>
                             </div>
                         </div>
                     </section>
                 </div>

                 @endforeach

             </div>
         </div>
         <div class="col-md-8" style="padding-top:30px">
             <p class="text-center">
                 <a href="https://blockbusterbd.com/schedule">
                     <img class="lazy common-loader" height="200px" src="https://blockbusterbd.com/assets/web/img/Buy-Tickets-Now1.png" alt="" class="w-100">
                 </a>
             </p>
             <p class="text-center">
                 <a href="https://blockbusterbd.com/club-royale">
                     <img src="https://blockbusterbd.com/assets/web/img/royal_club_icon.png" alt="" class="w-100">
                 </a>
             </p>
         </div>
     </div>
     <!-- End row -->
 </div>
 <!-- End container -->






 <div class="row align-items-center" id="single_room_feat">
     <div class="single-room-title col-md-3" style="background:#0f75bc; padding:0;">
         <h3 style=" color:#FFF;font-family: 'Gochi Hand', cursive;
                  line-height: 1.42857143; font-size:30px;padding: 0 15px;text-align: center;">Our Partners</h3>
     </div>



     <div class="col-md-9">

         <div class="">
             <div class="owl-carousel owl-theme client-logo " id="client-logo">
                 <div class="item ">
                     <a href="#" title="nagad logo"><img src="https://blockbusterbd.com/uploads/partners/7979190581685794665.jpg" class="img-responsive" alt="client-logo"></a>
                 </div>

             </div>
         </div>
     </div>
 </div>
 @endsection