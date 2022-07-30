@extends('layouts.app')

@section('content')



    <!-- portfolio front -->
    <section id="work-port" class="">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-12 f-l">
                    <h3 class="work-title">{!!__('home.on_demand_service') !!}</h3>
                    @if (App::isLocale('en'))
                    <div class="work-list">
                        <div class="list d-flex ">
                            <i class='bx bx-check'></i>
                            <h4 class="point stronger">unlimited & professional designs</h4>
                        </div>
                    </div>
                    <div class="work-list">
                        <div class="list d-flex ">
                            <i class='bx bx-check'></i>
                            <h4 class="point">no hiring & training</h4>
                        </div>
                    </div>
                    <div class="work-list">
                        <div class="list d-flex ">
                            <i class='bx bx-check'></i>
                            <h4 class="point">no expensive freelancers</h4>
                        </div>
                    </div>
                    @endif
                    <div class="work-list">
                        <div class="list d-flex ">
                            <i class='bx bx-check'></i>
                            <h4 class="point">{{__('home.you_decide')}}</h4>
                        </div>
                    </div>
                    <div class="work-list">
                        <div class="list d-flex ">
                            <i class='bx bx-check'></i>
                            <h4 class="point">{{__('home.variety_of_services')}}</h4>
                        </div>
                    </div>

                    <div class="buttons">
                        <button class="btns" type="submit"><a href="{{url('pricing')}}">{{__('home.pricing')}}</a></button>
                        @if (App::isLocale('en'))
                        <button class="btns" type="submit"><a href="{{url('work')}}">see in action</a></button>

                        @endif
                    </div>


                </div>
                <div class="col-lg-6 col-md-12  text-center">
                    <img src="{{asset('imges/frontpage/929.png')}}" class="port" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- working  -->
<!--    <section id="working" style="background-color: lightgrey;border-top: 1px solid rgba(165, 42, 42, 0.702);border-bottom: 1px solid rgba(165, 42, 42, 0.861);">
-->            <section id="working">

        <div class="container">
            <div class="row">
                <div class="col-md-8 intro mx-auto text-center text-capitalize">
                    <h3 class="ho-t">{{__('home.how_it_works')}}</h3>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="service-box  p-lg-5 p-4">
                        <!-- <div class="icon-box me-3 work-box">
                            <i class='bx bx-book-content'></i>
                        </div> -->
                        <div class="img-box">
                            <img src="{{asset('imges/frontpage/407.png')}}" alt="">
                        </div>
                        <div>
                            <h5 class="service-title">{{__('home.create_design_project')}}</h5>
                            <p class="work-para">
                                {{__('home.create_design_project_description')}}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box  p-lg-5 p-4">
                        <!-- <div class="icon-box me-3 work-box">
                            <i class='bx bxl-sketch'></i>
                        </div> -->
                        <div class="img-box">

                            <img src="{{asset('imges/frontpage/827.png')}}" alt="">
                        </div>
                        <div>
                            <h5 class="service-title">{{__('home.draft_revision')}}</h5>
                            <p class="work-para"> {{__('home.draft_revision_description')}}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box  p-lg-5 p-4">
                        <!-- <div class="icon-box me-3 work-box">
                            <i class='bx bxl-meta'></i>
                        </div> -->
                        <div class="img-box">
                            <img src="{{asset('imges/frontpage/398.png')}}" alt="">
                        </div>
                        <div>
                            <h5 class="service-title">{{__('home.complete_download')}}</h5>
                            <p class="work-para">{{__('home.complete_download_description')}}

                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- working-3  -->
    <section id="working-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column ps-lg-5">
                    <h3 class="work-title">{{__('home.easy_unexpensive')}}</h3>
                    @if (App::isLocale('en'))
                    <h2 class="con-h">it doesn't have to be.</h2>
                    @endif
                    <p class="con-para">{{__('home.easy_unexpensive_description')}}
                    </p>
                    <div class="container my-5 ms-0">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapseOne">
                                                <span class="me-3">01</span>
                                                <strong>{{__('home.card_first')}}</strong>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                             aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                               {{__('home.card_first_description')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                <span class="me-3">02</span>
                                                {{__('home.card_second')}}
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                             aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                {{ __('home.card_second_description')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                <span class="me-3">03</span>
                                                {{__('home.card_third')}}
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                             aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                {{__('home.card_third_description')}}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour"
                                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                <span class="me-3">04</span>
                                                {{__('home.card_fourth')}}
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse"
                                             aria-labelledby="panelsStayOpen-headingfour">
                                            <div class="accordion-body">
                                               {{__('home.card_fourth_description')}}
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="card " style="width: 18rem;">
                        <img src="{{asset('imges/TEAM.png')}}" class="card-img-top" alt="...">
                        <!-- <div class="card-body">
                            <h5 class="card-title text-start"> <strong> A Professional, Dedicated Designer</strong></h5>
                            <p class="card-text">Kiwi Design is a team of professionals, who will satisfy your needs
                                fast and easy.
                            </p> -->

                    </div>
                </div>
            </div>
        </div>

       <!-- <div class="container-fluid">
            <div class="divider "></div>
        </div>-->
    </section>

    <!-- pricing box  -->

    <section id="pricing-2">
        <section class="section">
            <div class="container">

                <div class="row my-5">
                    <div class="col-12 text-center">
                        <h1 class="title-one">{{__('home.simple_pricing')}}</h1>
                    </div>
                </div>

                <div class="main-pricing-container">
                    <div class="pricing-card">
                        <div class="pricing-card_header">
                            <h3 class="text-center head">{{__('home.basic')}}</h3>
                            <h1 class="text-center">$349/{{__('home.currency')}}</h1>
                            <h5 class="text-center">{{__('home.paid_monthly')}}</h5>
                        </div>
                        <div class="pricing-card_content">
                            <ul>
                                <li><i class="fa fa-check"></i>{{__('home.graphic_design')}}</li>
                                <li class="ps-4">{{__('home.custom_illustration')}}</li>
                                <li class="ps-4">{{__('home.infography')}}</li>
                                <li class="ps-4">{{__('home.motion_design')}}</li>
                                <li class="ps-4">{{__('home.presentation')}}</li>
                                <li class="ps-4">{{__('home.dedicated_designer')}}</li>
                                <li class=""><i class="fa fa-check"></i><strong>{{__('home.turnaround')}}</strong></li>
                                <li><i class="fa fa-check"></i> {{__('home.revisions')}}</li>
                                <li><i class="fa fa-check"></i> {{__('home.requests')}}</li>
                                <li class="ps-4">{{__('home.source_file')}}</li>
                                <li class="ps-4">{{__('home.prioritized_support')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pricing-card pricing-card--annual mx-2 pb-5">
                        <div class="pricing-card_header">
                            <h3 class="text-center head">{{__('home.standart')}}</h3>
                            <h1 class="text-center">$699/{{__('home.currency')}}</h1>
                            <h5 class="text-center">{{__('home.paid_monthly')}}</h5>
                        </div>
                        <div class="pricing-card_content tick">
                            <ul>
                                <li><i class="fa fa-check"></i>{{__('home.graphic_design')}}</li>
                                <li><i class="fa fa-check"></i>{{__('home.custom_illustration')}}</li>
                                <li class="ps-4 green-color" >{{__('home.infography')}}</li>
                                <li class="ps-4 green-color">{{__('home.motion_design')}}</li>
                                <li class="ps-4 green-color">{{__('home.presentation')}}</li>
                                <li><i class="fa fa-check"></i>{{__('home.dedicated_designer')}}</li>
                                <li class=""><i class="fa fa-check"></i><strong> {{__('home.turnaround')}}</strong></li>
                                <li><i class="fa fa-check"></i> {{__('home.revisions')}}</li>
                                <li><i class="fa fa-check"></i> {{__('home.requests')}}</li>
                                <li><i class="fa fa-check"></i> {{__('home.source_file')}}</li>
                                <li class="ps-4 green-color">{{__('home.prioritized_support')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pricing-card">
                        <div class="pricing-card_header">
                            <h3 class="text-center head">{{__('home.premium')}}</h3>
                            <h1 class="text-center">$1149/{{__('home.currency')}}</h1>
                            <h5 class="text-center">{{__('home.paid_monthly')}}</h5>
                        </div>
                        <div class="pricing-card_content">
                            <ul>
                                <li><i class="fa fa-check"></i>{{__('home.graphic_design')}}</li>
                                <li><i class="fa fa-check"></i>{{__('home.custom_illustration')}}</li>
                                <li><i class="fa fa-check"></i>{{__('home.infography')}}</li>
                                <li><i class="fa fa-check"></i>{{__('home.motion_design')}}</li>
                                <li><i class="fa fa-check"></i>{{__('home.presentation')}}</li>
                                <li><i class="fa fa-check"></i>{{__('home.dedicated_designer')}}</li>
                                <li class=""><i class="fa fa-check"></i><strong> {{__('home.turnaround')}}</strong></li>
                                <li><i class="fa fa-check"></i> <strong>{{__('home.revisions')}}</strong></li>
                                <li><i class="fa fa-check"></i> <strong>{{__('home.requests')}}</strong></li>
                                <li><i class="fa fa-check"></i> {{__('home.source_file')}}</li>
                                <li><i class="fa fa-check"></i>{{__('home.prioritized_support')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12  my-4 plan">
                        <h1 class="des-t text-black">{{__('home.not_sure')}}</h1>
                        <h1 class="des-c"><a class="des-c" href=" {{url('/contact-us')}}">{{__('home.contact_us')}}</a></h1>
                    </div>
                </div>
        </section>
    </section>
    <!-- check section  -->
    <section id="check-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="c-t text-center">{{__('home.check_out_some_of')}} <span>{{__('home.our_work')}}</span></h1>
                </div>
            </div>
            <div class="row w-100">
                <p class="served">{{__('home.check_out_some_of_description')}}</p>
            </div>

            <div id="featureContainer" style="margin:100px auto">
                <div class="row mx-auto my-auto justify-content-center">
                    <div class="col-1 left-icon">
                        <a class="" href="#featureCarousel" role="button" data-bs-slide="prev"><i class='bx bxs-left-arrow'></i></a>
                    </div>

                    <div class="col-10">
                        <div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('imges/398.jpg') }}" class="img-fluid">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('imges/custom illustration/2.jpg') }}" class="img-fluid">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('imges/custom illustration/karta.jpg') }}" class="img-fluid">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('imges/book1.jpg') }}" class="img-fluid">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('imges/book2.jpg') }}" class="img-fluid">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-1 left-icon ">
                        <a class="w-aut" href="#featureCarousel" role="button" data-bs-slide="next"><i class='bx bxs-right-arrow'></i></a>
                    </div>

                </div>
            </div>

        </div>
    </section>



@endsection
