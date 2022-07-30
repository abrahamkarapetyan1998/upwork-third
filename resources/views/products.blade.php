@extends('layouts.app')

@section('content')
    <!-- feature-banner -->
    <section
        id="hero"
        class="text-white overlay banner"
        data-jarallax
        data-speed="0.2"
        class="jarallax"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex justify-content-center flex-column">
                    <h1 class="ban-title">
                        save your time! <br />
                        make your work simplier!
                    </h1>
                    <p class="banner-text">
                        take care your business <br />
                        we'll handle the design
                    </p>
                    <!-- <div class="buttons">
                                <button type="button" class="banner-btn">book</button>
                                <button type="button" class="banner-btn ">book</button>
                            </div> -->
                    <div class="buttons-1">
                        <button class="btns-light" type="submit">
                            <a href="{{url('pricing')}}">see pricing</a>
                        </button>
                        <button class="btns-light" type="submit">
                            <a href="{{url('work')}}">get demo</a>
                        </button>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="pic-logo">
                        <img src="{{asset('imges/top.png')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- working  -->
    <section id="working" style="border-top: 1px solid rgba(165, 42, 42, 0.702);border-bottom: 1px solid rgba(165, 42, 42, 0.861);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 intro mx-auto text-center text-capitalize">
                    <h3 class="ho-t">how it works</h3>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="service-box p-lg-5 p-4">
                        <!-- <div class="icon-box me-3 work-box">
                                      <i class='bx bx-book-content'></i>
                                  </div> -->
                        <div class="img-box">

                            <img src="{{asset('imges/frontpage/407.png')}}" alt="" />
                        </div>
                        <div>
                            <h5 class="service-title">create design project</h5>
                            <p class="work-para">
                                we'll assign the best designer for the job.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box p-lg-5 p-4">
                        <!-- <div class="icon-box me-3 work-box">
                                      <i class='bx bxl-sketch'></i>
                                  </div> -->
                        <div class="img-box">

                            <img src="{{asset('imges/frontpage/827.png')}}" alt="" />
                        </div>
                        <div>
                            <h5 class="service-title">draft & revision</h5>
                            <p class="work-para">
                                Get your design between 24 - 48 hours submit as many revision
                                as you want untill you are happy
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box p-lg-5 p-4">
                        <!-- <div class="icon-box me-3 work-box">
                                      <i class='bx bxl-meta'></i>
                                  </div> -->
                        <div class="img-box">

                            <img src="{{asset('imges/frontpage/398.png')}}" alt="" />
                        </div>
                        <div>
                            <h5 class="service-title">complete & download</h5>
                            <p class="work-para">
                                Download all the desing and source files and immediately once
                                its done
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
                    <h3 class="work-title">CAN BE EASY & UNEXPENSIVE.</h3>
                    <h2 class="con-h">it doesn't have to be.</h2>
                    <p class="con-para">
                        Kiwi Design is a team of professionals, who will satisfy your
                        needs fast and easy.
                    </p>
                    <div class="container my-5 ms-0">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2
                                            class="accordion-header"
                                            id="panelsStayOpen-headingOne"
                                        >
                                            <button
                                                class="accordion-button"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne"
                                                aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseOne"
                                            >
                                                <span class="me-3">01</span>
                                                <strong> A Professional, Dedicated Designer</strong>
                                            </button>
                                        </h2>
                                        <div
                                            id="panelsStayOpen-collapseOne"
                                            class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingOne"
                                        >
                                            <div class="accordion-body">
                                                We match you with a designer who fits your needs
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2
                                            class="accordion-header"
                                            id="panelsStayOpen-headingTwo"
                                        >
                                            <button
                                                class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseTwo"
                                                aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseTwo"
                                            >
                                                <span class="me-3">02</span>
                                                Unlimited Requests and Revisions
                                            </button>
                                        </h2>
                                        <div
                                            id="panelsStayOpen-collapseTwo"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo"
                                        >
                                            <div class="accordion-body">
                                                With Kiwi Design you can order ulimited number of
                                                designs. You can order even 100! Unlimited revisions
                                                allow you to create exactly what you need.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2
                                            class="accordion-header"
                                            id="panelsStayOpen-headingThree"
                                        >
                                            <button
                                                class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseThree"
                                                aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseThree"
                                            >
                                                <span class="me-3">03</span>
                                                Fast turnarounds
                                            </button>
                                        </h2>
                                        <div
                                            id="panelsStayOpen-collapseThree"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingThree"
                                        >
                                            <div class="accordion-body">
                                                Time is priceless! Kiwi Design is answering your
                                                requests in one or two bussines days in most cases.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2
                                            class="accordion-header"
                                            id="panelsStayOpen-headingfour"
                                        >
                                            <button
                                                class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapsefour"
                                                aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseThree"
                                            >
                                                <span class="me-3">04</span>
                                                Easy Communication
                                            </button>
                                        </h2>
                                        <div
                                            id="panelsStayOpen-collapsefour"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingfour"
                                        >
                                            <div class="accordion-body">
                                                Kiwi Design team will respond to all your questions
                                                quickly, in friendly manner.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="card" style="width: 18rem">
                        <img src="{{asset('imges/TEAM.png')}}" class="card-img-top" alt="..." />

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- extra feature  -->
    <section id="working">
        <div class="container">
            <div class="row">
                <div class="col-md-8 intro mx-auto text-center text-capitalize">
                    <h3 class="feature-title">extra feature</h3>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="p-lg-5 p-4 feature-box">
                        <div class="icon-box me-3 work-box bg-transparent">
                            <i class="bx bx-book-content"></i>
                        </div>
                        <div>
                            <h5 class="service-title feature-head">
                                access to stock photo
                            </h5>
                            <p class="work-para feature-para">
                                level up your <br />
                                designs with free stock photos via insplash
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="p-lg-5 p-4 feature-box">
                        <div class="icon-box me-3 work-box bg-transparent">
                            <i class="bx bxl-sketch"></i>
                        </div>
                        <div>
                            <h5 class="service-title feature-head">
                                source files included
                            </h5>
                            <p class="work-para feature-para">
                                you have 100% ownership of the files the moment we deliver
                                them to you
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="p-lg-5 p-4 feature-box">
                        <div class="icon-box me-3 work-box bg-transparent">
                            <i class="bx bxl-meta"></i>
                        </div>
                        <div>
                            <h5 class="service-title feature-head">live chat support</h5>
                            <p class="work-para feature-para">
                                run into an issue?just chat with our support team.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- feature check  -->
    <section id="check-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="c-t text-center">
                        check out some of <span>our work</span>
                    </h1>
                </div>
            </div>
            <div class="row w-100">
                <p class="served">
                    custom illustration, t-shirts, infographics, book cover, brochures, flyers, online-ads, packaging, social media
                </p>
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
