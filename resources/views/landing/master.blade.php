<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{allsetting('app_title')}}"/>
    <meta property="og:image" content="{{show_image(1,'logo')}}">
    <meta property="og:site_name" content="{{allsetting('app_title')}}"/>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta itemprop="image" content="{{show_image(1,'logo')}}"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/common/css/bootstrap.min.css')}}">
    <!-- metismenu CSS -->
    <link rel="stylesheet" href="{{asset('assets/common/css/metisMenu.min.css')}}">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/common/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/common/css/icofont.min.css')}}">
    {{-- owl carousel --}}
    <link rel="stylesheet" href="{{asset('assets/common/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/common/css/owl.theme.default.min.css')}}">
    {{--for toast message--}}
    <link href="{{asset('assets/common/toast/vanillatoasts.css')}}" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/landing/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/landing/css/responsive.css')}}">
    <title>@yield('title') </title>
    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="{{landingPageImage('favicon','images/Pexeer.svg')}}/">
    @yield('style')
</head>

<body class="body-bg" id="top"  data-spy="is_sticky">

<!-- header start-->
<header>
    <div class="header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6 col-6 order-lg-0 order-1">
                    <div class="header-actions text-left">
                        <a href="{{route('marketPlace')}}" class="btn cbtn1">{{__('Exchange')}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-12 order-lg-0 order-0 mb-lg-0 mb-4 d-lg-block d-none">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{show_image(1,'logo')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-6 order-lg-0 order-2">
                    <div class="header-actions">
                        <a href="{{route('login')}}" class="btn cbtn1">{{__('Sign in')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end-->

@yield('content')

{{--footer --}}
<footer class="footer">
    <div class="container">
        <div class="top-footer">
            <div class="row">
                <div class="col-lg-2 col-md-5 col-sm-6 order-lg-0 order-0 mb-lg-0 mb-5">
                    <div class="footer-widget">
                        <a href="#top" class="ftr-logo">
                            <img src="{{show_image(1,'logo')}}" class="img-fluid" alt="">
                        </a>
                        <ul class="social-links">
                            <li><a href="void:"><i class="icofont-behance"></i></a></li>
                            <li><a href="void:"><i class="icofont-dribbble"></i></a></li>
                            <li><a href="void:"><i class="icofont-twitter"></i></a></li>
                            <li><a href="void:"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 order-lg-0 order-2 mb-sm-0 mb-5">
                    <div class="footer-widget">
                        <p class="title">{{__('About')}}</p>
                        <p>
                            @if(isset($settings['about_section_des']))
                                {!! clean(\Illuminate\Support\Str::limit($settings['about_section_des'],150)) !!}
                                @else Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 order-lg-0 order-3 mb-sm-0 mb-5">
                    <div class="footer-widget">
                        <p class="title">{{__('Features')}}</p>
                        <ul class="links">
                            @if(isset($pexer_features[0]))
                                @foreach($pexer_features as $feature)
                                    <li>{{explode('|',$feature->slug)[1]}}</li>
                                @endforeach
                            @else
                                <li>Various Ways To Pay</li>
                                <li>No Middleman</li>
                                <li>Worldwide Service</li>
                                <li>Encrypted Message</li>
                                <li>Fast Service</li>
                                <li>Non-custodial</li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 order-lg-0 order-1 mb-lg-0 mb-5">
                    <div class="footer-widget address-widget">
                        <p class="title">{{__('Contacts')}}</p>
                        <p>@if(isset($settings['company_address'])) {!! clean($settings['company_address']) !!}  @else 5055 North 03th Avenue,Penscola, FL 32503, New York @endif</p>
                        <ul class="content-links">
                            <li><i class="icofont-phone"></i>@if(isset($settings['company_mobile_no'])) {!! clean($settings['company_mobile_no']) !!} @else +1 965 047 658 23 @endif</li>
                            <li><i class="icofont-envelope"></i> @if(isset($settings['company_email_address'])) {!! clean($settings['company_email_address']) !!} @else pexeercom54@gmail.com @endif</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="bottom-footer">
            <p>{!! clean($settings['copyright_text']) !!}</p>
        </div>
    </div>
</footer>
{{--footer --}}

<!-- js file start -->

<!-- JavaScript -->
<script src="{{asset('assets/common/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/common/js/popper.min.js')}}"></script>
<script src="{{asset('assets/common/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/common/js/metisMenu.min.js')}}"></script>
{{--toast message--}}
<script src="{{asset('assets/common/toast/vanillatoasts.js')}}"></script>
<script src="{{asset('assets/common/sweetalert/sweetalert.js')}}"></script>
<script src="{{asset('assets/common/js/wow.min.js')}}"></script>
<script src="{{asset('assets/common/js/anime.min.js')}}"></script>
{{--owl--}}
<script src="{{asset('assets/common/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/landing/js/main.js')}}"></script>

<script>
    (function($) {
        "use strict";

        @if(session()->has('success'))
            swal({
                text: '{{ session('success') }}',
                icon: "success",
                buttons: false,
                timer: 3000,
            });

        @elseif(session()->has('dismiss'))
            swal({
                text: '{{ session('dismiss') }}',
                icon: "warning",
                buttons: false,
                timer: 3000,
            });

        @elseif($errors->any())
            @foreach($errors->getMessages() as $error)
                swal({
                    text: '{{ $error[0] }}',
                    icon: "error",
                    buttons: false,
                    timer: 3000,
                });
                @break
            @endforeach
        @endif

    })(jQuery);

</script>

@yield('script')
<!-- End js file -->
</body>
</html>
