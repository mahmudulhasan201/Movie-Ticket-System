<header>
    <div id="top_line">
        <div class="container">
            <!-- <p style="color:#0F75BC; float:right;padding-top:0px;font-size:15px;margin: 0 0 0px 0;">Urgent<span style="color:#fff;">Phone Support Not Available from 27th Dec 2PM to 31st Dec 11AM</span></p>  --->
        </div>
        <!-- End container-->
    </div>
    <!-- End top line-->
    <div id="top_header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div id="logo" class="logomobile">
                        <a href=""><img src="https://blockbusterbd.com/assets/web/img/logo.png" id="logoimg" alt="Blockbuster Cinemas" data-retina="true"></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="alert__div">


                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 text-right margin-top40">




                    <!-- <a href="https://blockbusterbd.com/user/login"><button type="button">Login</button></a>
                           <a href="https://blockbusterbd.com/user/registration"><button type="button">Registration</button></a> -->
                    <div class="menuDrop">
                        <ul>
                            @guest('customerGuard')
                            <li>
                                <a href="{{route('frontend.login')}}">Login</a>
                            </li>

                            <li>
                                <a href="{{route('frontend.registration')}}">Registration</a>
                            </li>
                            @endguest
                            @auth('customerGuard')
                            <li><a href="{{route('frontend.logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a></li>
                            @endauth
                        </ul>
                    </div>



                </div>
            </div>
        </div>

        <nav class="col-md-12 col-sm-12 col-xs-12" id="nav">
            <a class="cmn-toggle-switch cmn-toggle-switch__rot  open_close" href="javascript:void(0);"><span>Menu</span></a>
            <div class="main-menu">
                <div id="header_menu">
                    <img src="https://blockbusterbd.com/assets/web/img/logo.png" width="240" alt="Welcome to Block Buster" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                <ul>
                    <li>
                        <a href="{{route('frontend.home')}}">Home</a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="show-submenu">Category <i class="icon-down-open-mini"></i></a>
                        <ul>
                            @foreach($categories as $category)
                            <li>
                                <a href="{{route('frontend.category.movie.details', $category->id)}}" class="common-loader">
                                    {{ $category->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('frontend.movies')}}">All Movies</a>
                    </li>
                    <li>
                        <a href="{{route('frontend.contact')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- End main-menu -->
        </nav>
    </div>
</header>
<section class="sub_header" id="bg_general">
    <div class="sub_header_content">
        <div class="animated fadeInDown">

        </div>
    </div>
</section>