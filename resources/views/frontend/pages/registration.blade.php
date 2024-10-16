@extends('frontend.master')
@section('content')

<body class="bg-gradient-primary">
    <div class="bg_gray">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-5 login-custom">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Regisration Form</h1>
                                        </div>
                                        <form class="form-horizontal" role="form" method="POST" action="{{route('frontend.do.registration')}}">
                                            @csrf
                                            <div class="form-group">
                                                <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <input type="text" class="form-control form-control-user" id="name" placeholder="Enter Your Name..." value="" name="name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="" name="email">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <!-- <label for="password" class="col-md-4 control-label">Password</label> -->
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <input type="tel" class="form-control form-control-user" id="mobile" placeholder="Enter Mobile Number..." value="" name="mobile">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <input type="text" class="form-control form-control-user" id="address" placeholder="Enter Address..." value="" name="address">
                                                    </div>
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-primary btn-user">
                                                <i class="fa fa-btn fa-sign-in"></i> Register
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endsection