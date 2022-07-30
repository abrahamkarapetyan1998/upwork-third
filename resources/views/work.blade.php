@extends('layouts.app')

@section('content')
    <!-- blog head  -->
    <section id="blogs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="blog-head text-center">
                        {!!__('index.latest_creations')!!}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section id="blog-post">
        <div class="container">
            <!-- <div class="row"> -->
            <p class="work-section-links">
                <a class="section-links btn btn-secondary mt-1" href="#custom-illus">Custom Illustration</a>
                <a class="section-links btn btn-secondary mt-1" href="#tshirt"> T-shirts</a>
                <a class="section-links btn btn-secondary mt-1" href="#infogfx"> Infographics</a>
                <a class="section-links btn btn-secondary mt-1" href="#covers"> Book Covers</a>
                <a class="section-links btn btn-secondary mt-1" href=""> Brochures</a>
                <a class="section-links btn btn-secondary mt-1" href=""> Flyers</a>
                <a class="section-links btn btn-secondary mt-1" href="">Online-ads</a>
                <a class="section-links btn btn-secondary mt-1" href="">Packaging</a>
                <a class="section-links btn btn-secondary mt-1" href="">Social Media</a>
            </p>
            <!-- </div> -->

            <div id="custom-illus">
                <p class="section-heading">Custom Illustration</p>
                <div class="row">
                    <div class="col-md-3 mt-1">
                        <div class="section-item">
                            <div class="project">
                                <img src="{{asset('imges/custom illustration//usa.jpg')}}" alt="" />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Five</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-1">
                        <div class="section-item">
                            <div class="project">
                                <img
                                    src="{{asset('imges/custom illustration/shopify guzikart other.jpg')}}"
                                    alt=""
                                />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Five</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-1">
                        <div class="section-item">
                            <div class="project">
                                <img src="{{asset('imges/custom illustration/spicy miami2.jpg')}}" alt="" />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Five</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-1">
                        <div class="section-item">
                            <div class="project">
                                <img src="{{asset('imges/custom illustration/TREAD ON ME  guzikart.jpg')}}" alt="" />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Five</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tshirt">
                <p class="section-heading">T-Shirts</p>
                <div class="row">
                    <div class="col-md-3 mt-1">
                        <div class="section-item">
                            <div class="project">
                                <img src="{{asset('imges/T-shirts/blooooooooooooooooooo.jpg')}}" alt="" />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Five</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-1">
                        <div class="section-item">
                            <div class="project">
                                <img
                                    src="{{asset('imges/T-shirts/sabaton kids guzikart.jpg')}}"
                                    alt=""
                                />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Five</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-1">
                        <div class="section-item">
                            <div class="project">
                                <img src="{{asset('imges/T-shirts/party cannon guzikart.jpg')}}" alt="" />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Five</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-1">
                        <div class="section-item">
                            <div class="project">
                                <img src="{{asset('imges/T-shirts/MURDER MONDAY guzikart.jpg')}}" alt="" />
                                <div class="project-info text-center text-white">
                                    <div>
                                        <h5 class="mt-3">Project Five</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
