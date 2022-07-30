<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- bootstrap css file -->
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <!-- custom css file  -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- font awesome  -->
    <script src="https://kit.fontawesome.com/7eb9b83f2d.js" crossorigin="anonymous"></script>
    <!-- arimo font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- boxicons  -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .invalid-feedback{
            color:red !important;
        }
        .invalid-feedback strong{
            color:red !important;
        }
        .skiptranslate{
            display: none !important;
        }

        @if(app()->getLocale() == 'pl')
            .work-section-links > a {
                padding-top: 6px;
                padding-bottom: 8px;
            }
        @endif


    </style>
</head>
<body onload="initMethod()">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('imges/AVATAR.jpg') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!--<li class="nav-item">
                            <a class="nav-link" href="{{ url('/product') }}">product</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/work') }}">{{__('home.our_work')}}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pricing') }}">{{__('home.pricing')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about-us') }}">{{__('home.about_us')}}</a>
                        </li>
                         <li class="nav-item">
                               <a class="nav-link" href="{{ url('contact-us') }}">{{__('home.contact_us')}}</a>
                            </li>

                    </ul>
                    @guest
                    <form class="d-flex mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                    </form>
                    @else
                        <form class="d-flex mb-2 mb-lg-0" id="logout-form" action="{{ route('logout') }}" method="POST" >
                            @csrf
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">Request Design</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"> {{ Auth::user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                <input type="submit" value="Logout" class="btn btn-default" style="color: white;background-color:#39ca85 !important;">

                            </li>
                        </form>
                    @endguest
                </div>
            </div>
        </nav>
            @yield('content')
        <!-- footer -->
        <footer id="footer" class="footer">
      <div class="footer-top my-4">

            <div class="footer-top ">
                <div class="container">
                    <div class="footer-blocks">
                        <div class="logo-area">

                            <div class=" footer-col" style="align-items: center">
                                <div class="footer-logo">
                                    <img src="{{ asset('imges/AVATAR.jpg') }}" alt="">
                                </div>
                                <div class="social-links my-3 d-flex ">
                                    <a href="#"><i class='bx bxl-facebook'></i></a>
                                    <a href="#"><i class='bx bxl-twitter'></i></a>
                                    <a href="#"><i class='bx bxl-instagram'></i></a>
                                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                                    <a href="#"><i class='bx bxl-youtube'></i></a>



                                </div>
                            </div>

                        </div>
                        <div class="inner-blocks">
                            <div class="footer-col">
                                <h4 class="litle-sm fot-p">{{__('home.footer_pages')}}</h4>
                                <div class="footer-links d-flex flex-column fot-links">
                                    @if (App::isLocale('en'))
                                        <a href="{{url('product')}} ">product</a>
                                    @endif

                                    <a href="{{url('pricing')}}">{{__('home.pricing')}}</a>
                                    <a href="{{url('work')}}">{{__('home.footer_portfolio')}}</a>
                                    <a href="{{url('about-us')}}">{{__('home.footer_about')}}</a>
                                    @if (App::isLocale('en'))
                                        <a href="{{url('/')}}">blog</a>
                                    @endif

                                </div>
                            </div>
                            <div class="footer-col">
                                <h4 class="litle-sm fot-p">{{__('home.footer_more')}}</h4>
                                <div class="footer-links d-flex flex-column">
                                    <a href="">{{__('home.footer_faq')}}</a>
                                    <a href="{{url('privacy-policy')}}">{{__('home.footer_policy')}}</a>
                                    <a href="">{{__('home.footer_lycenses')}}</a>

                                </div>
                            </div>
                            <div id="contacts" class="footer-col">
                                <h4 class="litle-sm fot-p">contact</h4>
                                <div class=" d-flex my-3">
                                    <div class="me-3 footer-icon d-flex justify-content-center align-items-center">
                                        <i class='bx bx-book-content'></i>
                                    </div>
                                    <p class="contacts">rizwan482@gmail.com</p>

                                </div>
                                <div class=" d-flex my-3">
                                    <div class="me-3 footer-icon d-flex justify-content-center align-items-center">
                                        <i class='bx bx-phone'></i>
                                    </div>
                                    <p class="contacts">234-691-135</p>

                                </div>
                                <div class=" d-flex flex-row align-items-center my-3">
                                    <div class="me-3 footer-icon d-flex justify-content-center align-items-center">
                                        <i class='bx bx-location-plus'></i>
                                    </div>
                                    <p class="contacts">New York, USA</p>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="container footer-bottom my-5">
                <div class="row justify-content-between">

                    <div class="col-lg-6 col-sm-6 ms-0">
                        <ul class="lims ms-0">
                            <li><a style="color: white;" href="{{url('terms-conditions')}}" >terms & conditions</a></li>
                            <strong class="border"></strong>
                            <li><a style="color: white;" href="{{url('privacy-policy')}}" >Privacy Policy</a></li>
                            <strong class="border"></strong>
                            <li><a style="color: white;" href="{{url('cookies-policy')}}" >Cookie Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <p class="mb-0 text-capitalize copyright-text"><i class='bx bxs-copyright'></i> 2022 Tenmato . all
                            rights reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- js file  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        let items = document.querySelectorAll('#featureContainer .carousel .carousel-item');
        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i=1; i<minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
        $(document).ready(function(){
            $('#featureCarousel').carousel({interval: false});
            $('#featureCarousel').carousel('pause');
        });
    </script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <script type="text/javascript">

        function initMethod(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    callback( xhttp.responseText);
                }
            };
            xhttp.responseType='text';
            xhttp.open("GET", "https://geolocation-db.com/json/", true);
            xhttp.send();
        }

        function callback(data){
            console.log(data);
            var jsonData=JSON.parse(data);
            code=jsonData.country_code;
            code=code.toLowerCase();
            if(code=='pl'){
                $('.work-section-links > a').css({"padding-bottom": "10px"});
                setCookie('googtrans', '/en/pl', 1);
            }else{
                setCookie('googtrans', 'en', 1);
            }

        }
        function setCookie(key, value, expiry) {

            cookie1=  document.cookie;
            var expires = new Date();
            expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
            document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
            if (!(localStorage.getItem('first_time_load'))) {
                $('.cookie_banner').show();
                console.log ('no storage, reloading');
                localStorage.setItem('first_time_load', 'yes');
                googleTranslateElementInit();
            }else{
                 $('.cookie_banner').hide();
            }
        }

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="{{ asset('js/cookie.notice.js') }}"></script>
</body>
</html>
