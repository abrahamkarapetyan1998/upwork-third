@extends('layouts.app')

@section('content')
    <section id="hero" class="text-white overlay " data-jarallax data-speed="0.2" class="jarallax">
        <div class="container">
            <div class="row ">
                <div class=" col-lg-6 col-sm-6  d-flex justify-content-center align-items-center ">
                    <h1 class="hero-title">{!!__('about_us.meet_our_team')!!}</h1>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="pic-logo">
                        <img src="{{asset('imges/top.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="text-center bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-4 col-sm-6 ">
                    <div class="logo-2">
                        <img src="{{asset('imges/PHOTO.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-sm-6 ">
                    <p class="para-1"> {!!__('about_us.Damian')!!} {{__('about_us.Damian_description')}}</p>
                </div>
            </div>

        </div>

    </section>

    <!-- about-2  -->

    <section id="about-2" class="text-white">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class=" col-lg-7 col-sm-6">
                    <h5 class="text-white"><strong class="text-white">{{__('about_us.our_team')}}</strong></h5>
                    <p class="text-white">{{__('about_us.our_team_description')}}</p>
                </div>
                <div class="col-lg-5 col-sm-6 col-md-6 text-end">
                    <div class="logo-3">
                        <img src="{{asset('imges/frontpage/TEAM.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--end-->

    <!-- mission  -->
    <section id="services" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 intro mx-auto text-center text-capitalize">
                    <h3><strong>{{__('about_us.our_mission')}}</strong></h3>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="service-box  p-lg-5 p-4">
                        <div class="icon-box me-3">
                            <i class='bx bx-support'></i>
                        </div>
                        <div>
                            <h5 class="service-title">{{__('about_us.support')}}</h5>
                            <p class="service-para"> {{__('about_us.support_description')}}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box p-lg-5 p-4">
                        <div class="icon-box me-3">
                            <i class='bx bxs-edit'></i>
                        </div>
                        <div>
                            <h5 class="service-title">{{__('about_us.create')}}</h5>
                            <p class="service-para">{{__('about_us.create_description')}}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box p-lg-5 p-4">
                        <div class="icon-box me-3">
                            <i class='bx bxl-meta'></i>
                        </div>
                        <div>
                            <h5 class="service-title">{{__('about_us.develop')}}</h5>
                            <p class="service-para">{{__('about_us.develop_description')}}
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--end-->
@endsection
