@extends('layouts.app')

@section('content')
    <!-- design section  -->
    <section id="design-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mb-3 plan">
                    <h1 class="des-title">{!!__('pricing.choose_the_right_plan')!!} </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- pricing section  -->
    <section id="pricing">
        <section class="section-100">
            <div class="container">

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
                    <div class="col-lg-12 mb-3 plan">
                        <h1 class="des-t text-black">{{__('home.not_sure')}} </h1>
                        <h1 class="des-t text-black">{{__('home.special_plan')}} </h1>
                        <h1 class="des-c"><a class="des-c" href=" {{url('/contact-us')}}">{{__('home.contact_us')}}</a></h1>
                    </div>
                </div>
        </section>
    </section>

    <!-- pricing packge  -->
    <section id="packge">
        <div class="container mb-5">
            <div class="row  gy-md-5">
                <div class="col-12">
                    <h1 class="plan-title text-center">{{__('pricing.all_packets_included')}}</h1>
                </div>
            </div>

            <div class="row gx-0 my-3 pricing">
                <div class="col-lg-3">
                    <div class="plan-box">

                        <h2 class="p-title">{{__('pricing.unlimited_requests')}}</h2>
                        <p class="p-text">{{__('pricing.unlimited_requests_description')}}</p>

                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="plan-box">

                        <h2 class="p-title">{{__('pricing.unlimited_revisions')}}</h2>
                         <p class="p-text">{{__('pricing.unlimiteed_revisions_description')}}</p>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="plan-box">
                        <h2 class="p-title">{{__('pricing.dedicated_designer')}}</h2>
                         <p class="p-text">{{__('pricing.dedicated_designer_description')}}</p>

                    </div>
                </div>
                <div class="col-lg-3">
                     <div class="plan-box">
                        <h2 class="p-title">{{__('pricing.fast_turnaround_times')}}</h2>
                         <p class="p-text">{{__('pricing.fast_turnaround_times_description')}}</p>

                    </div>
               </div>
            </div>
           <!-- <div class="row gx-0">
                <div class="col-lg-4 offset-lg-2">
                    <div class="plan-box">
                        <div class="plan-icon">
                            <i class='bx bx-add-to-queue'></i>
                        </div>
                        <h2 class="p-title">access to free <br> stock photos</h2>
                        <p class="p-text">make your brand and your designs unique with free stock photos via unsplash</p>

                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="plan-box">
                        <div class="plan-icon">
                            <i class='bx bx-adjust'></i>
                        </div>
                        <h2 class="p-title">source file <br>included</h2>
                        <p class="p-text">you have100% ownership of files the moment we deliver them with you.</p>

                    </div>
                </div>
            </div>-->
        </div>
    </section>
    <!-- question section  -->
    <section id="question" class="border-bottom">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-md-5 que">
                    <img class="q2" src="{{asset('imges/design.png')}}" alt="">
                </div>
                <div class="col-lg-6 col-md-7 ">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    {{__('pricing.is_it_unlimited')}}
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    {{__('pricing.is_it_unlimited_description')}}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    {{__('pricing.i_would_like_to_design')}}
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    {{__('pricing.i_would_like_to_design_description')}}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                   {{__('pricing.who_owns_commercial')}}
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    {{__('pricing.who_owns_commercial_description')}}
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                  {{__('pricing.how_many_revisions')}}
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                                <div class="accordion-body">
                                    {{__('pricing.how_many_revisions_description')}}

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                                    {{__('pricing.delivery_time')}}
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfive">
                                <div class="accordion-body">
                                    {{__('pricing.delivery_time_description')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
